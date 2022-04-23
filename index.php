<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Якутск будущего</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="for_body ind">
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

   	  <div class="m_content">
   	  	<!--Картинка с текстом-->
   	  	<div class="board">
   	  		<div class="m_container">
   	  			<h1 class="board_text">Якутск будущего</h1>
   	  			<p class="board_text">Сделай наш город лучше</p>
   	  			<a class="linkk" href="projects.php"> Проекты </a>
   	  		</div>
   	  	</div>
   	  	<!--конец Картинка с текстом-->


   	  	<!--О сайте-->
   	  	<div class="m_container">
   	  		<div class="two-block_row">
   	  			<div class="column1 first">
   	  				<img src="img/g1.jpg" class="column_img">
   	  			</div>
   	  			<div class="column2 first">
   	  				<p style="margin-top: 5%">«Якутск Будущего» - сайт, помогающий идейным людям реализовать свои проекты по облагораживанию столицы Республики Саха (Якутия). Благодаря этому сайту каждый пользователь может перевести любую сумму на счет понравившегося плана по озеленению города.</p>
   	  			</div>
   	  		</div>

   	  		<div class="two-block_row">
   	  			<div class="column1 second">
   	  				<p style="margin-top: 9%">Не нашли нужный вам проект? Создайте его сами. «Якутск Будущего» поможет продвинуть вашу инициативу, а также собрать необходимую для реализации сумму. От вас требуется лишь идея, план ее осуществления и терпение.</p>
   	  			</div>
   	  			<div class="column2 second">
   	  				<img src="img/g2.jpg" class="column_img">
   	  			</div>
   	  		</div>

   	  	</div>
   	  	<!--О сайте-->

   	  </div>

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