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
	<title>Рассписание</title>
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
	<link rel="stylesheet" href="css/timeTable.css" />
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
						<form action="timeTable.php" id>
							<h2 ><?php echo $_SESSION['logged_user']->fullName;?><br> <span><?php echo $_SESSION['logged_user']->group;?></span></h2>
							<a class="user_mnu" id="various" data-fancybox-type="iframe" href="marks/Belov.php"><i class="fa fa-line-chart" aria-hidden="true"></i>Моя успеваемость</a>
							<a class	= "user_mnu" href="about_univer.php"><i class="fa fa-university" aria-hidden="true"></i>Мой университет</a>
							<a class	= "user_mnu" href="skip.php"><i class="fa fa-wheelchair" aria-hidden="true"></i>Кол-во пропусков</a>
							<a href="logout.php">Выйти</a>
						</form>
					<?php else : ?>
						<form action="timeTable.php" method="POST"> 
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

	<section class="timeTable">
		
		<div class="col-md-7 no-margin">
			<div class="tabs_table">
				<div class="wrapper">
					<div class="tabs clearfix">
						<span class="tab">Понедельник</span>
						<span class="tab">Вторник</span>
						<span class="tab">Среда</span>   
						<span class="tab">Четверг</span>
						<span class="tab">Пятница</span>     
					</div>
					<div class="tab_content">
						<div class="tab_item">

							<table>
								<tr>
									<td>1</td>
									<td>КП</td>
								</tr>
								<tr>
									<td>2</td>
									<td>КП</td>
								</tr>
								<tr>
									<td>3</td>
									<td>КП</td>
								</tr>
								<tr>
									<td>4</td>
									<td>КП</td>
								</tr>
								<tr>
									<td>5</td>
									<td>КП</td>
								</tr>
								<tr>
									<td>6</td>
									<td>КП</td>
								</tr>
							</table>

						</div>
						<div class="tab_item">

							<table>
								<tr>
									<td>1</td>
									<td></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Безпека життєдіяльності (лек.) доц. <br>
										Малєєв В.О. т.26-31 а.113(3)</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Фізичне виховання ст.в. Мантула С.І.,<br>
											в. Кобилянський В.С. т.26-33</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Основи охорони праці (пр.) доц.<br>
												Карманов В.В. т.26-31 а.431(1)</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Основи охорони праці (пр.) доц.<br>
													Карманов В.В. т.26-31 а.435(1)</td>
												</tr>
												<tr>
													<td>6</td>
													<td></td>
												</tr>
											</table>

										</div>
										<div class="tab_item">
											<table>
												<tr>
													<td>1</td>
													<td></td>
												</tr>
												<tr>
													<td>2</td>
													<td><table class="simple">
														<tr>
															<td>Проектний практикум (лб.)<br>
																ас. Кірюшатова К.В.<br>
																т.26-41 а.319(3)</td>
																<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
															</tr>
														</table></td>
													</tr>
													<tr>
														<td>3</td>
														<td><table class="simple">
															<tr>
																<td>Сховища даних (лб.) <br>
																	ас. Кірюшатова Т.Г. т.27-41 <br>
																	(непарні) а.319(3)</td>
																	<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
																</tr>
																<tr class="simple_tr"><td>Сховища даних (лек.) доц. Кірюшатова <br>
																	Т.Г. т.26-40 (парні) а.322(3)</td></tr>
																</table></td>
															</tr>
															<tr>
																<td>4</td>
																<td><table class="simple">
																	<tr>
																		<td>Об'єктно-орієнтоване<br>
																			програмування (лб.) ас.<br>
																			Ложкін Р.С. т.26-41 а.321(3)</td>
																			<td>Конструювання ПЗ (лб.)<br>
																				доц. Кирийчук Д.Л. <br>
																				т.26-41 а.319(3)</td>
																			</tr>
																		</table></td>
																	</tr>
																	<tr>
																		<td>5</td>
																		<td><table class="simple">
																			<tr>
																				<td>Конструювання ПЗ<br>
																					(лб.) доц. Кирийчук Д.Л.<br>
																					т.26-41 а.319(3)</td>
																					<td>Проектний практикум (лб.)<br>
																						ас. Кірюшатова К.В.<br>
																						т.26-41 а.321(3)</td>
																					</tr>
																				</table></td>
																			</tr>
																			<tr>
																				<td>6</td>
																				<td><table class="simple">
																					<tr>
																						<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
																						<td>Сховища даних (лб.) ас.<br>
																							Кірюшатова К.В. т.27-41<br>
																							(непарні) а.321(3)</td>
																						</tr>
																					</table></td>
																				</tr>
																			</table>

																		</div>
																		<div class="tab_item">

																			<table>
																				<tr>
																					<td>1</td>
																					<td></td>
																				</tr>
																				<tr>
																					<td>2</td>
																					<td>Безпека життєдіяльності (пр.) доц.<br>
																						Малєєв В.О. т.26-32 (парні) а.426(1)</td>
																					</tr>
																					<tr>
																						<td>3</td>
																						<td>Безпека життєдіяльності (пр.) доц. <br>
																							Малєєв В.О. т.27-33 (непарні) а.431(1); <br>
																							Професійна практика програмної <br>
																							інженерії (лек.) доц. Козуб Н.О. <br>
																							т.26-40 (парні) а.406(3)</td>
																						</tr>
																						<tr>
																							<td>4</td>
																							<td><table class="simple">
																								<tr>
																									<td>Інтегровані CASE <br>
																										засоби (лб.) доц. Жарікова М.В., <br>
																										ас. Ложкін Р.М. т.26-41 а.319(3)</td>
																										<td>Професійна практика <br>
																											програмної інженерії (лб.) <br>
																											Козуб Н.О. т.26-41 а.321(3)</td>
																										</tr>
																									</table></td>
																								</tr>
																								<tr>
																									<td>5</td>
																									<td><table class="simple">
																										<tr>
																											<td>Професійна практика <br>
																												програмної інженерії (лб.) <br>
																												Козуб Н.О. т.26-41 а.321(3)</td>
																												<td>Інтегровані CASE засоби <br>
																													(лб.) доц. Жарікова М.В., <br>
																													ас. Ложкін Р.М. т.26-41 а.204(3)</td>
																												</tr>
																											</table></td>
																										</tr>
																										<tr>
																											<td>6</td>
																											<td><table class="simple">
																												<tr>
																													<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
																													<td>Об'єктно-орієнтоване <br>
																														програмування (лб.) ас. <br>
																														Яцюк С.В. т.26-41 а.321(3)</td>
																													</tr>
																												</table></td>
																											</tr>
																										</table>

																									</div>
																									<div class="tab_item">

																										<table>
																											<tr>
																												<td>1</td>
																												<td>Пакетная программа</td>
																											</tr>
																											<tr>
																												<td>2</td>
																												<td>Проектний практикум (лек.) ст.в. Боскін<br>
																													О.О. т.27-41 (непарні) а.322(3); <br>
																													Конструювання ПЗ (лек.) доц. Кирийчук <br>
																													Д.Л.т.26-40 (парні) а.322(3)</td>
																												</tr>
																												<tr>
																													<td>3</td>
																													<td>Об'єктно-орієнтоване <br>
																														програмування (лек.) доц. Ляшенко О.М. <br>
																														т.27-41 (непарні) а.322(3); <br>
																														Інтегровані CASE засоби (лек.) <br>
																														доц. Ляшенко О.М. т.26-40 <br>
																														(парні) а.406(3)</td>
																													</tr>
																													<tr>
																														<td>4</td>
																														<td><table class="simple">
																															<tr>
																																<td>Політологія (лек.) доц. Ватуля Ю.О. т.26-33 а.211(1);</td>
																															</tr>
																															<tr class="simple_tr">
																																<td>Фізичне виховання ст.в. Мантула С.І., <br>
																																	викл. Кобилянський В.С. т.34-41</td>
																																</tr>
																															</table></td>
																														</tr>
																														<tr>
																															<td>5</td>
																															<td>Політологія (пр.) доц. <br>
																																Ватуля Ю.О. т.26-33 а.211(1)</td>
																															</tr>
																															<tr>
																																<td>6</td>
																																<td></td>
																															</tr>
																														</table>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="col-md-5 no-margin">
																										<div class="time_table ">
																											<h2>Рассписание звонков</h2>
																											<table>
																												<tr>
																													<td>1 пара</td>
																													<td>8:30 - 9:50</td>
																												</tr>
																												<tr>
																													<td>2 пара</td>
																													<td>10:05 - 11:25</td>
																												</tr>
																												<tr>
																													<td>3 пара</td>
																													<td>11:50 - 13:10</td>
																												</tr>
																												<tr>
																													<td>4 пара</td>
																													<td>13:25 - 14:45</td>
																												</tr>
																												<tr>
																													<td>5 пара</td>
																													<td>15:00 - 16:20</td>
																												</tr>
																												<tr>
																													<td>6 пара</td>
																													<td>16:35 - 17:55</td>
																												</tr>
																											</table>
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