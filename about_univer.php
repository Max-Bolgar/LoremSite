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
	<title>О университете</title>
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
	<link rel="stylesheet" href="css/about_univer.css" />
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
				<div class="col-md-12">
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
			</div>
		</div>
	</header>
	<section class="menu_univer">
		<ul><!--
			--><li><a id="various" data-fancybox-type="iframe" href="university/rektor.php">Ректор</a></li><!--
			--><li><a id="various" data-fancybox-type="iframe" href="university/prorektor.php">Ректорат</a></li><!--
			--><li><a id="various" data-fancybox-type="iframe" href="university/history.php">История университета</a></li><!--
			--><li><a id="various" data-fancybox-type="iframe" href="university/prof.php">Профсоюз университета</a></li><!--
			--><li><a id="various" data-fancybox-type="iframe" href="university/contacts.php">Контакты</a></li><!--
		--></ul>
		<a class="togle-nav2"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
	</section>
	<section class="unv">
		<h2>Об университете</h2>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-ms-12 col-xs-12">
					<div id="my_owl" class="owl-carousel owl-theme">
						<div class="item"><img src="img/item1.jpg" alt=""></div>
						<div class="item"><img src="img/item2.jpg" alt=""></div>
						<div class="item"><img src="img/item3.jpg" alt=""></div>
						<div class="item"><img src="img/item4.jpg" alt=""></div>
						<div class="item"><img src="img/item5.jpg" alt=""></div>
						<div class="item"><img src="img/item6.jpg" alt=""></div>
						<div class="item"><img src="img/item7.jpg" alt=""></div>
					</div>
					<p>&emsp;&emsp;Історія ХНТУ започаткована у 1959 р., коли в Херсоні для задоволення потреби в кадрах Херсонського бавовняного комбінату, першу чергу якого тоді тільки що введено в експлуатацію, було створено навчально-консультаційний пункт Київського технологічного інституту легкої промисловості. <br>
						&emsp;&emsp;В 1960 році навчально-консультаційний пункт реорганізовано в Херсонський загально-технічний факультет цього інституту і розпочато підготовку інженерів текстильної і легкої промисловості. <br>
						&emsp;&emsp;У 1961 році факультет було передано Одеському технологічному інституту ім. М. В. Ломоносова. <br>
						&emsp;&emsp;В 1962 році перетворено в Херсонський філіал названого інституту (ХФОТІ). Незважаючи на статус філіалу, ХФОТІ вже до кінця 60-х років став дієздатним вищим навчальним закладом, у якому готували фахівців з семи спеціальностей текстильної промисловості, машинобудування, автоматизації виробничих процесів, економіки. При філіалі було відкрито текстильний вечірній технікум, аспірантуру, підготовка інженерів здійснювалась на п’яти факультетах. <br>
						&emsp;&emsp;У грудні 1980 року на базі ХФОТІ було відкрито самостійний вищий навчальний заклад – Херсонський індустріальний інститут. Уже в ті роки інститут був осередком розвитку освіти й науки в Херсоні і області. <br>
						&emsp;&emsp;Статус університету надано у 1997 році на підставі Постанови Кабінету Міністрів України від 24 березня 1997 року №254. <br>
						&emsp;&emsp;На підставі Указу Президента України від 15.11.2004 №1403/2004 Херсонському державному технічному університету надано статус національного. Університет, заснований на загальнодержавній власності України, є автономним вищим навчальним закладом ІV рівня акредитації. <br>
						&emsp;&emsp;3 серпня 2006 року спільним наказом Міністерства освіти і науки України та Національної академії наук України № 594/333 базовим закладом Південного наукового центру НАН України і МОН України у Херсонській області призначено Херсонський національний технічний університет, Головою обласної Науково-координаційної ради (НКР) – ректора університету, д.т.н., професора Бардачова Юрія Миколайовича. <br>
						&emsp;&emsp;25 січня 2007 року наказом Міністерства освіти і науки України №48 створено Раду ректорів вищих навчальних закладів III-IV рівнів акредитації Херсонської області, Головою призначено ректора університету, д.т.н., професора Бардачова Юрія Миколайовича. <br>
						&emsp;&emsp;Сьогодні ХНТУ – сучасний освітній центр, який реалізує програми підготовки та підвищення кваліфікації фахівців, а також виконує науково-дослідницькі роботи для підприємств, організацій та закладів галузей машинобудування, текстильної, харчової та легкої промисловості, технічної і економічної кібернетики, електроніки, менеджменту, економіки, комп’ютерних наук, комп’ютерної інженерії тощо. <br>
						&emsp;&emsp;Зараз у ХНТУ навчаються випускники шкіл Херсонської, Миколаївської, Дніпропетровської, Донецької, Луганської, Запорізької, Волинської, Рівненської, Житомирської, Київської, Чернігівської, Харківської областей, м. Києва, тимчасово окупованої АР Крим. Це свідчить про небувале зростання популярності університету як вищого навчального закладу національного масштабу. <br>
						&emsp;&emsp;В університеті працює 6 факультетів (Інженерії та транспорту, кібернетики та системної інженерія, інтегрованих технологій і товарознавства, економіки, міжнародних економічних відносин, управління і бізнесу та відокремлений структурний підрозділ – Генічеський факультет ХНТУ). <br>
						&emsp;&emsp;Складовою частиною університету є економіко-технологічний технікум, фізико-технічний ліцей, центр післядипломної освіти, центр довузівської підготовки. <br>
						&emsp;&emsp;Для проживання студентів створено студентське містечко з комфортабельними гуртожитками, комп'ютерними клубами, спортивним комплексом. Для оздоровлення університет утримує студентську амбулаторію сімейного лікаря, оздоровчо-спортивний комплекс на березі річки Дніпро.</p>
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