<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Якутск будущего</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_projects.css">
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

   	  <?php 
   	  $query = mysqli_query($con, "SELECT * FROM projects WHERE id=".$_GET["id"]);
   	  $stroka= $query->fetch_assoc();

   	  $query2 = mysqli_query($con, "SELECT * FROM user WHERE id=".$stroka["creator"]);
   	  $stroka2= $query2->fetch_assoc();
   	   ?>
   	  <!--Контент-->
   	  <div class="m_content">
   	  	<div class="m_container">
   	  		<!--Див про проект-->
   	  		<div class="d-flex m_block">
   	  			<!--Картинка и полн описание-->
   	  			<div class="block1">
   	  				<div class="image_big"><img src="<?php echo $stroka["img"] ?>"></div>
   	  				<p><?php echo $stroka["poln_text"] ?></p>
   	  			</div>
   	  			<!--конец Картинка и полн описание-->

   	  			<!-- Инфа о проекте-->
   	  			<div class="block2">
   	  				<div class="bord">
	   	  				<div class="v_strok">
	   	  					<h1><?php echo $stroka["name"] ?></h1>
	   	  					<a href="HEAD/HEAD_like.php?id=<?php echo $_GET["id"] ?>"><img src="img/like.png" ></a>
	   	  				</div>
		   	  			<h6>Понравилось: <?php echo $stroka["likes"] ?> пользователям</h6>
		   	  			<h6><?php echo $stroka["kr_text"] ?></h6>
	   	  			</div>

	   	  			<div class="bord linee">
	   	  				<h6>Автор: <?php echo $stroka2["login"] ?></h6>
	   	  				<h6>Собрано <span class="have_sum"><?php echo $stroka["have_sum"] ?></span>руб  От <span class="need_sum"><?php echo $stroka["need_sum"] ?></span>руб</h6>

	   	  				<button class="btn btn-success podderzh">Поддержать</button>
	   	  				<button class="btn btn-warning">Стать волонтером</button>
   	  				</div>

   	  				<div class="bord linee">
	   	  				<h6>Кол-во волонтёров: <span></span></h6>
	   	  				<h6>Обратная связь:</h6>
	   	  				<p style="margin-left: 1vw">Телефон: <?php echo $stroka["phone"] ?></p>
	   	  				<p style="margin-left: 1vw">Почта: <?php echo $stroka["email"] ?></p>
   	  				</div>
   	  			</div>
   	  			<!-- конец Инфа о проекте-->
   	  		</div>
   	  		<!--конец Див про проект-->

   	  	</div>
   	  </div>
   	  <!--конец Контент-->

   	  <!--Пожертвование-->
   	  <div class="cash">
   	  	<h1>Форма для пожертвования</h1>
   	  	<h3>Введите сумму, которую желаете перевести</h3>
   	  	<form action="HEAD/HEAD_poddezh.php?id=<?php echo $_GET["id"] ?>" method="POST">
	   	  	<div class="f-flex text-center">
	   	  		<input type="" name="cash">
	   	  		<button>Отправить</button>
	   	  	</div>
   	  	</form>
   	  	<div class="otmena">
		  	<span></span>
		</div>
   	  </div>
   	  <!--конец Пожертвование-->

	   <div class="m_footer">
	  	<div class="d-flex foot_first">
		  	<div class="foot_column c2">
		  		<h6 style="margin: 0">Контакты</h6>
		  		<div class="contact">
			  		<p>8 800 ***-**-**</p>
			  		<p>г. Якутск, ул. Ломоносова, д.37/1 </p>
			  		<p>arostik4@mail.ru</p>
		  		</div>
		  	</div>
		  	<div class="foot_column c3">
		  		<h6>Следите за нами</h6>
		  		<div class="d-flex col-6 mx-auto" style="justify-content: space-between; padding-top: 1vw">
		          <img src="img/vk.png" class="mrv-4" style="height: 3vw; width: 3vw">
		          <img src="img/tw.png" class="mlv-4 mrv-4" style="height: 3vw; width: 3vw">
		          <img src="img/fb.png" class="mlv-4 " style="height: 3vw; width: 3vw">
		        </div>
		  	</div>
		  	<div class="foot_column c1">
		  		<p>Политика обработки персональных данных</p>
		  		<p>Условия использования</p>
		  	</div>
	  	</div>
	  	
	  	<div class="foot_second text-center">
	  		<p>© Якутск будущего, 2022</p>
	  	</div>
	  </div>
	   
   </div>

   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>