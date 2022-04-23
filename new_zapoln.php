<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Якутск будущего</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_new.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="for_body">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'resp');?>

   <div class="m_wrapper">
   	  <!--Header-->
   	  <header class="m_header mx-auto">
   	  	<div class="m_container">
   	  		<div class="header__body">
   	  			<!-- Лого-->
		  		<a href="" class="header__logo">
		  			<img src="img/logo.png">
		  		</a>
		  		<!-- конец Лого-->

		  		<!--Меню-->
		  		<div class="header__burger">
		  			<span></span>
		  		</div>

		  		<nav class="header__menu">
		  			<ul class="header__list">
		  				<li>
		  					<a href="index.php" class="header__link">Главное</a>
		  				</li>
		  				<li>
		  					<a href="projects.php" class="header__link">Проекты</a>
		  				</li>

		  				<?php if ($_SESSION['id']==null) {?>
		  				<li style="margin-left: 3vw">
		  					<a href="signIn.php" class="header__link">Вход</a>
		  				</li>
		  				<li>
		  					<a href="reg.php" class="header__link"> Регистрация</a>
		  				</li>
		  				<?php } else{?>
		  				<li>
		  					<a href="" class="header__link">Стать волонтером</a>
		  				</li>

		  				<li style="margin-left: 3vw">
		  					<a href="reg.php" class="header__link">Профиль</a>
		  				</li>
		  				<li>
		  					<a href="HEAD/HEAD_exit.php" class="header__link">Выйти</a>
		  				</li>
		  				<?php } ?>
		  			</ul>
		  		</nav>

		  		<!-- конец Меню-->
		  	</div>
   	  	</div>
   	  </header>
   	  <!--конец Header-->

   	  <!--Контент-->
   	  <div class="m_content ">
   	  	

   	  	<div class="mini__header mx-auto mt-2" >
   	  		<nav class="mini__menu">
   	  			<ul class="mini__list">
   	  				<li>
   	  					<a href="new_zapoln.php" class="mini__link active">Заполнение</a>
   	  				</li>
   	  				<li>
   	  					<a href="" class="mini__link">Финансирование</a>
   	  				</li>
   	  				<li>
   	  					<a href="new_volont.php" class="mini__link">Волонтеры</a>
   	  				</li>
   	  				<li>
   	  					<a href="" class="mini__link">Реклама</a>
   	  				</li>
   	  			</ul>
   	  		</nav>
   	  		<h2 class="text-center mt-4">Этап “Заполнение”</h2>
   	  		<h5 class="text-center">На данном этапе вы заполните всю необходимую информацию о вашем проекте</h5>
   	  	</div>



   	  	<!--Форма-->
   	  	<div class="m_container mt-4 pb-4">
   	  	<form action="HEAD/HEAD_zapoln.php" method="POST" enctype="multipart/form-data">
   	  		<!--Название-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Название проекта</h6>
	   	  			<p>Его будут видеть все пользователи. Оно должно быть запоминающимся и отражающим основную идею проекта</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<input type="" name="name" class="form-control">
	   	  		</div>
   	  		</div>
   	  		<!--конец Название-->

   	  		<!--Изображ-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Обложка</h6>
	   	  			<p>Фотография вашего проекта, для привлечения внимания.</p>
	   	  		</div>
	   	  		<div class="column2" style="padding-top: 1%">
	   	  			<input placeholder="Выбрать файл" class="mt-3" type="file" name="file">
	   	  		</div>
   	  		</div>
   	  		<!--конец Изображ-->

   	  		<!--Кр описание-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Краткое описание</h6>
	   	  			<p>Оно будет в предварительном просмотре. Напишите здесь только основное, что будет описывать ваш проект в паре предложений.</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<textarea class="form-control" type="" placeholder="" name="kr_text"></textarea>
	   	  		</div>
   	  		</div>
   	  		<!--конец Кр описание-->

   	  		<!--Полн описание-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Полное описание</h6>
	   	  			<p>Оно будет на странице вашего проекта. Ваша задача привлечь пользователя своей идеей и её подачей. Опишите свою идею, что послужило её возниквением, для чего вам нужна поддержка.</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<textarea class="form-control" type="" placeholder="" name="poln_text"></textarea>
	   	  		</div>
   	  		</div>
   	  		<!--конец Полн описане-->

   	  		<!--Продолжительность-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Продолжительность проекта</h6>
	   	  			<p>Количество дней, на которое вы расчитываете.
Максимальное количество дней 60.</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<input type="" name="time" class="form-control">
	   	  		</div>
   	  		</div>
   	  		<!--конец Продолжительность-->

   	  		<!--Сколько надо-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Необходимая сумма</h6>
	   	  			<p>Сумма необходимая для завершения проекта</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<input type="" name="need_sum" class="form-control">
	   	  		</div>
   	  		</div>
   	  		<!--конец Сколько надо-->
   	  		<div class="col-12 text-center">
   	  			<button class="btn btn-primary col-6"> Далее</button>
   	  		</div>
   	  	</form>
   	  	</div>
   	  	<!--конец Форма-->

   	  </div>
   	  <!--конец Контент-->

   </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>