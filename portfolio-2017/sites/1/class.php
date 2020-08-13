<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name=viewport content="width=device-width,initial-scale=1">
<? include("blocks/main/head.php");?>
<title>English Stars | Курс</title>
</head>
<body>
<div id="main">
	<? include("blocks/main/top.php");?>
	<? include("blocks/main/nav.php");?>
	<section id="header-page" class="class">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6">
					<h1 class="title">Английский<br>для детей 4-6 лет</h1>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="header-form">
						<form class="form-horizontal ajax-form" id="form-header">
					        <input type="hidden" name="tid" value="Запись на бесплатный урок">
					        <div class="form-group for-name">
					          <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
					        </div>
					        <h3>Запишитесь на<br>бесплатный урок</h3>
					        <div class="form-group">
					          <input type="text" class="form-control name" id="inpt1" placeholder="Имя" name="inpt1" required="">
					        </div>
					        <div class="form-group">
					          <input type="tel" class="form-control number" id="number" placeholder="Телефон" name="number" required="">
					        </div>
					        <div class="form-group">
					          <input type="text" class="form-control email" id="email" placeholder="E-mail" name="email">
					        </div>
					        <div class="clear"></div>
					        <button type="submit" class="btn send" id="send" name="submit">Записаться</button>
					        <div class="clear"></div>
					      </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="content">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="./">Главная</a></li>
				<li><a href="#">Английский язык для детей и взрослых</a></li>
				<li>Английский детям 4-6 лет </li>
			</ul>
			<div class="nav-fixed">
				<div class="nav-line">
					<ul class="nav-smooth">
						<li class="active"><a href="#about">о курсе </a></li>
						<li><a href="#reasons">6 причин учиться у нас</a></li>
						<li><a href="#timetable-content">Расписание</a></li>
						<li><a href="#teachers">преподаватели</a></li>
						<li><a href="#reviews">отзывы</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<h2 class="title orange text-left" id="about">Мы предлагаем передовые<br>технологии в обучении</h2>
			<div class="row">
				<div class="col-md-6">
					<img src="img/class/1.jpg" alt="">
					<div class="class-slider-container">
						<div class="owl-carousel class-slider">
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="img/class/slider/1.jpg" data-lightbox="example-set"><img src="img/class/slider/1.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="black">Успешно обучаем языкам более 18 лет</h3>
					<p>Мальтийский архипелаг состоит из трёх островов: самый большой и главный — Мальта, северный остров Гоцо и крохотный островок Комино, расположившийся ровно посередине архипелага. Оптимальный маршрут вокруг островов займёт неделю.</p>

					<p>На Мальте есть достаточное количество оборудованных марин, но большинство из них расположено в непосредственной близости от столицы острова — Валлетты. Есть также комфортабельная марина на южном побережье острова Гоцо. В остальных случаях придётся довольствоваться якорными стоянками, но учитывая, что на якорь разрешено вставать в заповедных местах, таких как Голубая лагуна или Лазурное окно, это только огромный плюс.</p>
				</div>
			</div>
		</div>
		<? include("blocks/index/reasons.php");?>
		<? include("blocks/index/info.php");?>
		<section id="timetable-content">
			<div class="container">
				<h2 class="title mb-20">Расписание и цены курса</h2>
				<h3 class="title2">Запись на пробный урок - бесплатно!</h3>
				<table class="timetable">
					<tr>
						<td>Возраст</td>
						<td>уровень</td>
						<td>расписание</td>
						<td>начало занятий</td>
						<td>занятий / часов в месяц</td>
						<td>стоимость</td>
						<td></td>
					</tr>
					<tr>
						<td>дети<br>4-6 лет</td>
						<td>Beginner</td>
						<td>пн + ср<br>18.00 - 18.45</td>
						<td>09.11.2016</td>
						<td>4 занятия / 8 ак. ч.</td>
						<td>Акция<br>4 400 р/мес<br><u>6 400 р/мес</u></td>
						<td><a href="#" data-toggle="modal" data-target="#lesson1" class="btn">Запись на курс</a></td>
					</tr>
				</table>
			</div>
		</section>
		<? include("blocks/pages/teachers.php");?>
		<? include("blocks/index/simply.php");?>
		<? include("blocks/index/reviews.php");?>
		<? include("blocks/index/free.php");?>
		<? //include("blocks/index/sale.php");?>
		<? include("blocks/index/offer.php");?>
		<section id="more_programms">
			<div class="container">
				<h2 class="title">Также для вашего ребенка<br>у нас есть следующие программы</h2>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="category-box">
							<a href="img/class/more_programms/1.jpg" data-lightbox="example-set-2"><img src="img/class/more_programms/1.jpg" alt=""></a>
							<p><a href="#">Английский взрослым</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="category-box">
							<a href="img/class/more_programms/2.jpg" data-lightbox="example-set-2"><img src="img/class/more_programms/2.jpg" alt=""></a>
							<p><a href="#">Английский детям<br>4-6 лет</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="category-box">
							<a href="img/class/more_programms/3.jpg" data-lightbox="example-set-2"><img src="img/class/more_programms/3.jpg" alt=""></a>
							<p><a href="#">Английский детям<br>7-9 лет</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<? include("blocks/main/footer.php");?>
	<? include("blocks/main/popup.php");?>
	<? include("blocks/main/scripts.php");?>
</div>
</body>
</html>   

















