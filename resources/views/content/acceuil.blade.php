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
    <meta name="description" content="L'intelligence artificielle est en vogue actuellement donc ne raté aucune nouvelle" >
    <meta name="keyword" content="Intelligence, artificielle, actualité, actu, nouvelle" >
	<title>L'information sur l'Intelligence Artificielle</title>
		<style type="text/css">
		.wrapper {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr; 
			grid-template-rows: 300px 100px;
			grid-gap: 10px;
		}
		.grid {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 100px 100px;
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
							<li><a href="/categorie-{{ $categorie->id }}">{{$categorie->libelle}}</a></li>
							@endforeach
						</ul>
					</nav>
				</div>
			</header>
			<section id="main">
<div class="wrapper">
	<?php for ($i=0; $i <count($articles) ; $i++) { ?>
					<div>
									<div class="box-info-holder" style="width: 370px; padding: 0;">
									<span class="title"><span>{{$time[$i]}}</span></span>
									<h2><a href="/detail/article-{{$articles[$i]->id}}">{{$articles[$i]->titre}}</a></h2>
									<p>{{$articles[$i]->description}}</p>				
								</div>
								
							</div>
	<?php } ?>
				</div>

				</div>
				<div class="block-advice">
					<div class="advice-holder">
						<h2>Newsletter</h2>
						<p>Join to receive other good news.</p>
					</div>
					<form action="#" class="form-newsletter">
						<fieldset>
							<input type="text" placeholder="Your email..." />
							<input class="btn black normal" type="submit" value="Subscribe" />
						</fieldset>
					</form>
				</div>
			</section>
		</div>
		
	</div>
	

</body>
</html>
