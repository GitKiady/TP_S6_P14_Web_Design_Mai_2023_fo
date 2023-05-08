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
    <meta name="description" content="{{ $articles[0]->description }}" >
    <meta name="keyword" content="{{ $articles[0]->keyword }}" >
	<title>L'information sur l'Intelligence Artificielle</title>


	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<span class="logo"><a href="/">L'information sur l'Intelligence Artificielle</a></span>
				<ul class="tools-nav tools-nav-mobile">
					<li class="items"><a href="cart.html"><span>2</span> Items, <strong>$599.00</strong></a></li>
					<li class="login"><a href="#">Login</a> / <a href="#">register</a></li>
				</ul>
				<div class="bar-holder">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							@foreach($categories as $categorie)
							<li><a href="/categorie-{{ $categorie->id }}">{{$categorie->libelle}}</a></li>
							@endforeach
						</ul>
					</nav>
				</div>
			</header>
			<section class="bar">
				<div class="bar-frame">
					<ul class="breadcrumbs">
						<li><a href="/">Home</a></li>
						<li><a href="/categorie-{{ $articles[0]->idcategorie }}">{{ $articles[0]->libelle }}</a></li>
					</ul>
				</div>
			</section>
			<section id="main">
				<div class="details-info">
					<div class="description">
						<div class="entry">
							<?php echo $articles[0]->contenue ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	
</body>
</html>
