<?php 
require "db.php";
$data = $_POST;

if (isset($data['do_login'])) {
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));
	if ($user) {
		if (password_verify($data['password'], $user->password)) {
			$_SESSION['logged_user']  =$user;
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

	<title>Lorem</title>
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
	<link rel="stylesheet" href="css/main.css" />
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
						<ul class="active">
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
							echo $a;
							?>
						</h3>
					</div>
				</div>

				<div class="col-md-6 col-ms-6 col-xs-6">

					<?php if ( isset($_SESSION['logged_user'])) :?>
						<form action="index.php" id>
							<h2 ><?php echo $_SESSION['logged_user']->fullName;?><br> <span><?php echo $_SESSION['logged_user']->group;?></span></h2>
							<a class="user_mnu" id="various" data-fancybox-type="iframe" href="marks/Belov.php"><i class="fa fa-line-chart" aria-hidden="true"></i>Моя успеваемость</a>
							<a class	= "user_mnu" href="about_univer.php"><i class="fa fa-university" aria-hidden="true"></i>Мой университет</a>
							<a class	= "user_mnu" href="skip.php"><i class="fa fa-wheelchair" aria-hidden="true"></i>Кол-во пропусков</a>
							<a href="logout.php">Выйти</a>
						</form>
					<?php else : ?>
						<form action="index.php" method="POST"> 
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

	<section class="main_serv">
		<h2>Lorem сервисы</h2>
		<hr>
		<p>Lorem предоставляет широкие возможности<br>
			для групп студентов, такие как просмотр успеваемости,<br>
			количества пропусков, мероприятия и другие</p>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="timeTable.php"><i class="fa fa-table" aria-hidden="true"></i>
							<h3>Рассписание</h3>
						</a>
						<hr>
						<p>Одна из саммых важных возможностей<br>
							нашей системы, студент легко может<br>
							узнать рассписание занятий на<br>
							интересующий его день</p>
							<a href="timeTable.php"><button class="btn_blue">Перейти</button></a>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<a href="Events.php"><i class="fa fa-book" aria-hidden="true"></i>
								<h3>Мероприятия</h3>
							</a>
							<hr>
							<p>Студент вовремя  и быстро узнает о всех<br>
								предстоящих мероприятиях в которых<br>
								будет участвовать его группа или<br>
								мероприятиях которые уже состоялись</p>
								<a href="Events.php"><button class="btn_blue">Перейти</button></a>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<a href="#"><i class="fa fa-money" aria-hidden="true"></i>
									<h3>Сессия</h3>
								</a>
								<hr>
								<p>Самое важное и страшное событие для любого<br>
									студента, слова излишни</p>
									<a href="#"><button class="btn_blue">Перейти</button></a>
								</div>
							</div>
							<div class="ms_button">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<a href="progress.php">
											<i class="fa fa-line-chart" aria-hidden="true"></i>
											<h3>Успеваемость</h3>
										</a>
										<br>	
										<p>&emsp;&emsp;&emsp;Представленные все оценки каждого<br>
											студента группы. Есть поиск по модулю, сесси или<br>
											текущие.</p>
											<a href="skip.php">
												<i class="fa fa-wheelchair" aria-hidden="true"></i>
												<h3>Пропуски</h3>
											</a>
											<br>
											<p>&emsp;&emsp;&emsp;Подсчитаны пропуски каждого студента,<br>
												отображается сколько осталось пропусков до<br>
												критического значения.</p>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<a href="#">
													<i class="fa fa-users" aria-hidden="true"></i>
													<h3>Преподаватели</h3>
												</a>
												<br>
												<p>&emsp;&emsp;&emsp;Один из самых важных разделов,<br>
													собраны полные имена всех преподавателей.</p>
													<a href="about_univer.php">
														<i class="fa fa-university" aria-hidden="true"></i>
														<h3>Университет</h3>
													</a>
													<br>
													<p>&emsp;&emsp;&emsp;В данном разделе описана история университета, его<br>
														кафедры, ектор и другая информация связана с жизнью университета.</p>
													</div>
												</div>
											</div>
										</div>
									</section>

									<section class="mobile">
										<h2>Разработка приложения для мобильных устройств</h2>
										<hr>
										<div class="title_p">
											<p>Старт работ над мобильной версией Lorem’a</p>
										</div>
										<div class="container">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-6">
													<img src="img/hand.png" alt="hand">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-6">
													<h3>Разработка приложения</h3>
													<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut<br>
														fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel<br>
														scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur.<br>
														Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum<br>
														id ligula porta felis euismod semper.</p>
														<div class="check">
															<i class="fa fa-check-circle-o" aria-hidden="true"></i>
															<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
															<br>
															<i class="fa fa-check-circle-o" aria-hidden="true"></i>
															<p>Donec id elit non mi porta gravida at eget metus.</p>
														</div>
													</div>
												</div>
											</div>
										</section>

										<footer>
											<div class="container">
												<div class="row ">
													<div class="col-md-6 col-sm-6 col-xs-6">
														<h3>All rights reserved 2017 | Designed by Bolgar Max.</h3>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-6">
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