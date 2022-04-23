<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');
	$query = mysqli_query($con, "SELECT * FROM projects WHERE id=".$_GET["id"]);
   	$stroka= $query->fetch_assoc();
   	$k=$stroka["have_sum"]+$_POST["cash"];
   	$query2 = mysqli_query($con, "UPDATE projects SET have_sum = '{$k}' WHERE id='{$_GET["id"]}'");

   	header('Location: ../info_project.php?id='.$stroka["id"]);
 ?>