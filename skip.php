<?php 
require "db.php";
$data = $_POST;

if (isset($data['do_login'])) {
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if ($user) {
		if (password_verify($data['password'], $user->password)) {
			$_SESSION['logged_user'] = $user;
		} else {
			$errors[] = 'Ошибка ввода даных';
			echo "<script> alert(\"Неверный пароль\");</script>";
		}
	}else {
		$errors[] = 'Ошибка ввода даных';
		echo "<script> alert(\"Пользователь не найден\");</script>";
	}
	if ( empty($errors)) {
		echo "<script> alert(\"Успешно вошли\");</script>";
	}
}
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
	<title>Пропуски</title>
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
	<link rel="stylesheet" href="css/skip.css" />
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
				<div class="col-md-6 col-ms-6 col-xs-6">
					<div class="button_head">
						<h2>Добро пожаловать в LOREM</h2>
						<p>LOREM - это система, которая сможет значительно<br>упростить жизнь студентов и групп в целом.</p>
						<h3>Неделя № 
							<?php
							$a = round((strtotime (date("d.F.Y"))-strtotime (date("01.09.2016")))/(60*60*24) / 7);
							print ($a);
							?>
						</h3>
					</div>
				</div>
				<div class="col-md-6 col-ms-6 col-xs-6">
					<?php if ( isset($_SESSION['logged_user'])) :?>
						<form action="skip.php" id>
							<h2 ><?php echo $_SESSION['logged_user']->fullName;?><br> <span><?php echo $_SESSION['logged_user']->group;?></span></h2>
							<a class="user_mnu" id="various" data-fancybox-type="iframe" href="marks/Belov.php"><i class="fa fa-line-chart" aria-hidden="true"></i>Моя успеваемость</a>
							<a class	= "user_mnu" href="about_univer.php"><i class="fa fa-university" aria-hidden="true"></i>Мой университет</a>
							<a class	= "user_mnu" href="skip.php"><i class="fa fa-wheelchair" aria-hidden="true"></i>Кол-во пропусков</a>
							<a href="logout.php">Выйти</a>
						</form>
					<?php else : ?>
						<form action="skip.php" method="POST"> 
							<h2>Вход</h2>
							<input type="text" name="login" placeholder="Логин" required>
							<input type="password" name="password" placeholder="Пароль" required >
							<button type="submit" name="do_login">Вход</button>
							<a href="registration.php">Регистрация</a>
						</form>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>
	<section class="skip">
		<h2>Количество пропусков</h2>
		<hr>
		<div class="person">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h4>Белов Роман <span>11 пропусков(ка)</span></h4>
						<h4>Болгар Максим <span>11 пропусков(ка)</span></h4>
						<h4>Ветух Сергей <span>11 пропусков(ка)</span></h4>
						<h4>Гаврилюк Богдан <span>11 пропусков(ка)</span></h4>
						<h4>Галка Михаил <span>11 пропусков(ка)</span></h4>
						<h4>Генс Алексей <span>11 пропусков(ка)</span></h4>
						<h4>Головина Надежда <span>11 пропусков(ка)</span></h4>
					</div>
					<div class="col-md-3">
						<h4>Горщинский Данил <span>11 пропусков(ка)</span></h4>
						<h4>Гриневич Виталий <span>11 пропусков(ка)</span></h4>
						<h4>Гришко Дмитрий <span>11 пропусков(ка)</span></h4>
						<h4>Дукач Анастасия <span>11 пропусков(ка)</span></h4>
						<h4>Ковальчук Вячеслав <span>11 пропусков(ка)</span></h4>
						<h4>Комарова Валерия <span>11 пропусков(ка)</span></h4>
						<h4>Косовская Оксана <span>11 пропусков(ка)</span></h4>
					</div>
					<div class="col-md-3">
						<h4>Крестинич Александр <span>11 пропусков(ка)</span></h4>
						<h4>Кульбач Александр <span>11 пропусков(ка)</span></h4>
						<h4>Левицкая Ана <span>11 пропусков(ка)</span></h4>
						<h4>Лукашев Никита <span>11 пропусков(ка)</span></h4>
						<h4>Назарук Александр <span>11 пропусков(ка)</span></h4>
						<h4>Рыбась Денис <span>11 пропусков(ка)</span></h4>
						<h4>Романцов Валентин <span>11 пропусков(ка)</span></h4>
					</div>
					<div class="col-md-3">
						<h4>Седов Сергей <span>11 пропусков(ка)</span></h4>
						<h4>Синжук Богдан <span>11 пропусков(ка)</span></h4>
						<h4>Смеликова Диана <span>11 пропусков(ка)</span></h4>
						<h4>Столяр Андрей <span>11 пропусков(ка)</span></h4>
						<h4>Страх Екатерина <span>11 пропусков(ка)</span></h4>
						<h4>Тарвирдиев Тимур <span>11 пропусков(ка)</span></h4>
						<h4>Цибулько Владислав <span>11 пропусков(ка)</span></h4>
						<h4>Яковенко Антон <span>11 пропусков(ка)</span></h4>
					</div>
				</div>
			</div>
		</div>
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