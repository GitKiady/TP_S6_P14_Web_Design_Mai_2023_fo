<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

@extends('../layout/layout')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>Elegantic</title>
		<style type="text/css">
		.wrapper {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr; 
			grid-template-rows: 300 100px;
			grid-gap: 10px;
		}
	</style>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<span class="logo"><a href="index.html">L'information sur l'Intelligence Artificielle</a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.html"><span>2</span> Items, <strong>$599.00</strong></a></li>
					<li class="login"><a href="#">Login</a> / <a href="#">register</a></li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							@foreach($categories as $categorie)
							<li><a href="{{asset('/categorie-')}}{{ $categorie->id }}">{{$categorie->libelle}}</a></li>
							@endforeach
						</ul>
					</nav>
				</div>
			</header>
			<section class="bar">
				<div class="bar-frame">
					<ul class="breadcrumbs">
						<li><a href="{{asset('/')}}">Home</a></li>
						<li><a href="{{asset('/categorie-')}}{{ $cat[0]->id }}">{{ $cat[0]->libelle }}</a></li>
					</ul>
				</div>
			</section>
			<section id="main">
				<div class="top-bar">
					<ul class="paging">
						<li class="prev"><a href="#">prev</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#">next</a></li>
					</ul>
				</div>
				<ul class="item-list">
					<?php for($i = 0 ; $i<count($articles) ; $i++) { ?>
					<li>
						<div class="item">
							<span class="name"><a href="{{asset('/detail/article-')}}{{$articles[$i]->id}}">{{$articles[$i]->titre}}</a>  </span>
							<p style="font-size: 10px;">{{$time[$i]}}</p>
							<p>{{$articles[$i]->description}}</p>
								
						</div>
					</li>
					<?php } ?>
				</ul>
				<div class="top-bar top-bar-add">
					<ul class="paging">
						<li class="prev"><a href="#">prev</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="next"><a href="#">next</a></li>
					</ul>
				</div>
			</section>
		</div>
	</div>
	

</body>
</html>