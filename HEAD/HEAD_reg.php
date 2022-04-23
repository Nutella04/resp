<?php session_start() ?>
<?php 

	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');
	$zapros = "INSERT into user(login, phone, email, password) 
				VALUES('{$_POST["login"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["password"]}')";
	$query = mysqli_query($con, $zapros);
	$query2 = mysqli_query($con, "SELECT * FROM user WHERE login = '{$_POST["login"]}' and password = '{$_POST["password"]}'");
	$stroka = $query2->fetch_assoc();
	$_SESSION["id"] = $stroka["id"];
	header('Location: ../index.php');
 ?>