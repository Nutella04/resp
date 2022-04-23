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
<body class="for_body proj">
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
		  					<a href="" class="header__link">Проекты</a>
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
	   	 <div class="sort">
	   	  	<div class="m_container">
	   	  		<div class="col-12 d-flex">
		   	  		<form action="HEAD/HEAD_sort.php" method="POST" class="col-6 navig mx-auto">
			   	  		<label class="sort">Сортировка по: </label>
			   	  		<select name="sort" class="col-5">
			   	  		<?php 
			   	  		if ($_GET["sort"]!= 'new') {?>
			   	  			<option value="popular" selected>Популярности</option>
							<option value="new">Добавлению</option>	
			   	  		<?php }
			   	  		else{ ?>  
			   	  			<option value="new" selected>Добавлению</option>
							<option value="popular">Популярности</option>
						<?php } ?>
						</select>
						<button href="" class="btn btn-success">Сортировать</button>
					</form>
	   	  		</div>
	   	  	</div>
	   	 </div>

   	  	<?php if ($_SESSION['id']!=null) {?>
		<div class="col-12 text-center">
			<button class="btn btn-success col-2 mt-2" onclick="return location.href = 'new_zapoln.php'">Добавить проект</button>
		</div>
   	  	<?php } ?>

   	  	<!--О сайте-->
   	  	<div class="m_container">
   	  	
   	  	<?php 
   	  		if ($_GET["sort"]!= 'new') {
	   	  		$query = mysqli_query($con, "SELECT * FROM projects ORDER BY likes DESC");
	   			$tabl = mysqli_query($con, "SELECT * FROM projects ORDER BY likes DESC");
	   	  	}
	   	  	else{
	   	  		$query = mysqli_query($con, "SELECT * FROM projects ORDER BY id DESC");
	   			$tabl = mysqli_query($con, "SELECT * FROM projects ORDER BY id DESC");
	   	  	}
   	  	?>

   	  	 	<?php for ($i=0; $i < round($tabl->num_rows/2); $i++) { ?>
   	  		<div class="two-block_row">
   	  			<!-- Основ инфа о проекте-->
   	  			<?php 
   	  			for ($j=0; $j < 2; $j++) { 
   	  				if ((($i+1)*2<=$tabl->num_rows && $j==0) || (($i+1)*2<=$tabl->num_rows && $j==1) || (($i+1)*2>$tabl->num_rows && $j==0)) {
				        $stroka= $query->fetch_assoc();
				        $query2 = mysqli_query($con, "SELECT * FROM user WHERE id=".$stroka['creator']);
			        $stroka2= $query2->fetch_assoc();
			      ?>
   	  			<div class="column1 col-6">
   	  				<div class="column2">
   	  					<div class="image text-center">
	   	  					<img src="<?php echo $stroka["img"] ?>">
	   	  				</div>
	   	  				<div class="col_sod">
	   	  					<h6><span><?php echo $stroka["name"] ?></span></h6>
	   	  					<p>Понравилось: <span><?php echo $stroka["likes"] ?></span> пользователям</p>
		   	  				<p>Собрано: <span><?php echo $stroka["have_sum"] ?>руб</span>/<span><?php echo $stroka["need_sum"] ?>руб</span></p>
		   	  				<p><span><span><?php echo $stroka["kr_text"] ?></span></span></p>
		   	  			</div>
		   	  			<div class="v_strok">
		   	  				<a href="info_project.php?id=<?php echo $stroka["id"]; ?>">Подробнее</a>
		   	  				<p><span><?php echo $stroka2["login"] ?></span></p>
		   	  			</div>
	   	  				
   	  				</div>
   	  			</div>
   	  			<!-- конец Основ инфа о проекте-->
   	  			<?php } }?>
   	  			
   	  		</div>
   	  		<?php } ?>


   	  	</div>
   	  	<!--О сайте-->

   	  </div>
   	  <!--конец Контент-->

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>