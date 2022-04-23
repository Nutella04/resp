<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style_vhod.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="overflow: hidden;" class="for_body regg">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'resp');?>

<div class="mx-auto regis">
  <h4 class="text-center ">Регистрация</h4>

  <div class="col-8 mx-auto">
	<form action="HEAD/HEAD_reg.php" method="POST" enctype="multipart/form-data">
	  <div>
	  	  <label for="login">Логин:</label>
		  <input class="inp" type="" placeholder="" name="login">
		  <label for="phone">Телефон:</label>
		  <input class="inp" type="" placeholder="" name="phone">
		  <label for="phone">Почта:</label>
		  <input class="inp" type="" placeholder="" name="email">
		  <label for="password">Пароль:</label>
		  <input class="inp" type="password" placeholder="" name="password">
	  </div>
	  <div class="text-center">
	  	<button class="btn btn-success form-control">Зарегистрироваться</button>
	  	<a href="index.php" class="text-dark mt-3">Вернуться назад</a>
	  </div>
	  
	</form>
  </div>
</div>

<div class="vh_footer">
	
</div>

</body>
</html>