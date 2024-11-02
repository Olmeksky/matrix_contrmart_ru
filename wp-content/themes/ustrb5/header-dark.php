<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
		<!-- шрифт -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
	<!-- подключим стили для матрицы -->
	<link href="/wp-content/themes/ustrb5/assets/css/styler2_black.css" rel="stylesheet">
	
		<!-- Поля подключенные через ACF -->

	<?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- navbar-dark bg-dark -->
	<div class="container">
		<a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarScroll">
			<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Гадание</a></li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="/" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Матрицы судьбы</a>
				<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
					<li><a class="dropdown-item" href="/personal/">Персональная</a></li>
					<li><a class="dropdown-item" href="/personal-dark/">Персональная (темная)</a></li>
					<li><a class="dropdown-item" href="/sovmestimost/">Совместимости</a></li>
					<li><a class="dropdown-item" href="/sovmestimost-dark/">Совместимости (темная)</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Арканы</a></li>
				</ul>
				</li>
			</ul>
			<div class="top-nav_search"><?php get_search_form(); ?></div>
		</div>
	</div>
</nav>
