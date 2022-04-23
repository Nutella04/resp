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
		  		<a href="index.php" class="header__logo">
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
   	  					<a href="new_zapoln.php" class="mini__link ">Заполнение</a>
   	  				</li>
   	  				<li>
   	  					<a href="" class="mini__link">Финансирование</a>
   	  				</li>
   	  				<li>
   	  					<a href="new_volont.php" class="mini__link active">Волонтеры</a>
   	  				</li>
   	  				<li>
   	  					<a href="" class="mini__link">Реклама</a>
   	  				</li>
   	  			</ul>
   	  		</nav>
   	  		<h2 class="text-center mt-4">Этап "Волонтеры"</h2>
   	  		<h5 class="text-center">На данном этапе вы должны указать нужны ли вам волонтёры для проекта</h5>
   	  	</div>



   	  	<!--Форма-->
   	  	<div class="m_container mt-4 pb-4">
   	  	<form action="HEAD/HEAD_volont.php?id=<?php echo $_GET["id"]?>" method="POST" enctype="multipart/form-data">
   	  		<!--Название-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Нужны ли вам волонтёры для проекта?</h6>
	   	  			<p>Нуждаетесь ли вы в помощи в виде волонтёров в вашем проекте?</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<select name="vol_yes_no" class="form-control">
						<option value="Нет" selected>Нет</option>
						<option value="Да">Да</option>	      
					</select>
	   	  		</div>
   	  		</div>
   	  		<!--конец Название-->

   	  		<!--Название-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Максимальное количество волонтёров</h6>
	   	  			<p>Указываете сколько максимум вам нужно рабочих рук для завершения проекта</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<input type="" name="max_vol" class="form-control">
	   	  		</div>
   	  		</div>
   	  		<!--конец Название-->

   	  		<!--Описание деятельности-->
   	  		<div class="two-block_row">
	   	  		<div class="column1">
	   	  			<h6>Описание работы для волонтёров</h6>
	   	  			<p>Необходимо указать какую именно и при каких условиях нужно выполнять работу, чтобы заранее проинформировать волонтёров.</p>
	   	  		</div>
	   	  		<div class="column2">
	   	  			<textarea class="form-control" type="" placeholder="" name="vol_text"></textarea>
	   	  		</div>
   	  		</div>
   	  		<!--конец Описание деятельности-->


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