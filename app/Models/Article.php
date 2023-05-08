<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;

    protected $table="article";
    protected $primaryKey="id";

    public static function selectCategorieById($idcategorie) {
        $sql = "SELECT * FROM categorie WHERE id=$idcategorie";
        return DB::select($sql);
    }

    public static function selectCategorie() {
        $sql = "SELECT * FROM categorie";

        return DB::select($sql);
    }

    public static function selectRecent() {
        $sql = "SELECT * FROM v_article_recent";

        return DB::select($sql);
    }

    public static function selectByCategorie($idCategorie) {
        $sql = "SELECT * FROM v_article_recent_10 WHERE idcategorie=$idCategorie";

        return DB::select($sql);
    }

    public static function selectById($idarticle) {
        $sql = "SELECT * FROM v_articles WHERE id=$idarticle";

        return DB::select($sql);
    }
}
