<?php session_start(); ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');
	$query = mysqli_query($con, "SELECT * FROM user WHERE password = '{$_POST['password']}' and login = '{$_POST['login']}' ");
	$stroka = $query->fetch_assoc();
	if ($query->num_rows == 1) {
		$_SESSION["id"] = $stroka["id"];
		header('Location: ../index.php');
	}
	else{
		header('Location: ../signIn.php');
	}
 ?>