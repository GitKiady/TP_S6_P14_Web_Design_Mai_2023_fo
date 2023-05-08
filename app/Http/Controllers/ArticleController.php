<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    public static function selectRecent() {
        $list = Article::selectRecent();

        $data = ArticleController::setData($list);

        return view('content/acceuil')->with($data);

    }

    public static function selectById($idarticle) {
        $list = Article::selectById($idarticle);

        $data = ArticleController::setData($list);

        return view('content/detail')->with($data);
    }

    public static function selectByCategorie($idcategorie) {
         $list = Article::selectByCategorie($idcategorie);

        $data = ArticleController::setData($list);
        $data['cat'] = Article::selectCategorieById($idcategorie);

        return view('content/categorie')->with($data);         
    }

    private static function setData($list) {
        $tableTime = [];
        for($i=0 ; $i<count($list) ; $i++) {
            $tableTime[$i] = ArticleController::getTimeDifference($list[$i]->date_publication);
        }

        $data = [];
        $data['categories'] = Article::selectCategorie();
        $data['articles'] = $list;
        $data['time'] = $tableTime;

        return $data;
    }

    private static function getTimeDifference($timestamp) {
        $now = time(); // current timestampe
        $diff = $now - strtotime($timestamp); // difference in seconds
        $minute = 60;
        $hour = $minute * 60;
        $day = $hour * 24;
        $week = $day * 7;

        if($diff < $minute) {
            return 'less than 1 minute';
        } elseif ($diff > $minute && $diff < $hour) {
            return round($diff/$minute) . ' minutes ago';
        } elseif ($diff > $hour && $diff < $day) {
            return round($diff/$hour) . ' hour(s) ago';
        } elseif ($diff > $day && $diff < $week) {
            return round($diff/$day) . ' day(s) ago';
        } else {
            return date('d/m/Y', $timestamp);
        }

    }

}
