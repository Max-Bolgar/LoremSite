<?php 
require "db.php";
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Поддержка</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="img/favicon.png" />
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/contact_us.css" />
	<link rel="stylesheet" href="css/media.css" />
	<link rel="stylesheet" href="libs/nprogress/nprogress.css">
</head>
<body>
	<header>
		<!-- Вверх шапки -->
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="logo">
						<img src="img/logo.png" alt="logo">
					</div>
				</div>
				<!-- Меню -->
				<div class="col-md-7">
					<div class="top_menu">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<li><a href="about_us.php">О Lorem'e</a></li>
							<li><a href="contact_us.php">Поддержка</a></li>
							<li><a id="various" data-fancybox-type="iframe" href="chat/example.php"><span>Чат группы</span></a></li>
						</ul>
						<a href="#" class="togle-nav"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="button_head">
						<h2>Добро пожаловать в LOREM</h2>
						<p>LOREM - это система, которая сможет значительно<br>упростить жизнь студентов и групп в целом.</p>
						<h3 id="week_sup">Неделя № 
							<?php
							$a = round((strtotime (date("d.F.Y"))-strtotime (date("01.09.2016")))/(60*60*24) / 7);
							print ($a);
							?>
						</h3>
					</div>
				</div>

				<div class="col-md-6">
					<form id="form"> 
						<h2>Оставить запрос</h2>
						<input type="text" name="name" placeholder="Полное имя" required>
						<input type="text" name="email" placeholder="Адресс електронной почты" required>
						<input type="text" name="phone" placeholder="Номер телефона">
						<input type="text" name="country" placeholder="Страна">
						<textarea name="textarea" cols="42" rows="5" placeholder="Введите Ваш запрос"></textarea>
						<button>Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</header>

	<section class="map">
		<h2>НАШЕ МЕСТОРАСПОЛОЖЕНИЕ</h2>
		<hr>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10951.488098439564!2d32.6374787!3d46.6687877!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedf9e79b0da3ec8a!2z0KXQtdGA0YHQvtC90YHQutC40Lkg0L3QsNGG0LjQvtC90LDQu9GM0L3Ri9C5INGC0LXRhdC90LjRh9C10YHQutC40Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sua!4v1493226691635" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<footer>
		<div class="container">
			<div class="row ">
				<div class="col-md-6 col-ms-6 col-xs-6">
					<h3>All rights reserved 2017 | Designed by Bolgar Max.</h3>
				</div>
				<div class="col-md-6 col-ms-6 col-xs-6">
					<div class="social_btn">
						<i id="top" class="fa fa-caret-square-o-up" aria-hidden="true"></i>
						<a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="libs/countdown/jquery.plugin.js"></script>
	<script src="libs/countdown/jquery.countdown.min.js"></script>
	<script src="libs/countdown/jquery.countdown-ru.js"></script>
	<script src="libs/landing-nav/navigation.js"></script>
	<script src="js/common.js"></script>
	<script src="libs/nprogress/nprogress.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>