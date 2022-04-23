<?php session_start() ?>
<?php 
	$img_dir = '../img/'; //папка где хранятся картинки
	$img_name = $img_dir . basename($_FILES['file']['name']); //путь где хранится картинка или полное название картинки
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $img_name);
	$null = 0;

	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');

	$query2 = mysqli_query($con, "SELECT * FROM user WHERE id = '{$_SESSION["id"]}'");
	$stroka = $query2->fetch_assoc();

	$zapros = "INSERT into projects(creator, phone, email, name, img, kr_text, poln_text, time, need_sum, have_sum) 
				VALUES('{$stroka["id"]}', '{$stroka["phone"]}', '{$stroka["email"]}', '{$_POST["name"]}', '{$img_name}', '{$_POST["kr_text"]}', '{$_POST["poln_text"]}', '{$_POST["time"]}', '{$_POST["need_sum"]}', '{$null}')";
	$query = mysqli_query($con, $zapros);

	$query3 = mysqli_query($con, "SELECT * FROM projects WHERE creator = '{$_SESSION["id"]}' AND kr_text = '{$_POST["kr_text"]}'");
	$stroka2 = $query3->fetch_assoc();

	header('Location: ../new_volont.php?id='.$stroka2["id"]);
 ?>