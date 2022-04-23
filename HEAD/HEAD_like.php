<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');
	$query = mysqli_query($con, "SELECT * FROM projects WHERE id=".$_GET["id"]);
   	$stroka= $query->fetch_assoc();
   	$k=$stroka["likes"]+1;
   	$query2 = mysqli_query($con, "UPDATE projects SET likes = '{$k}' WHERE id='{$_GET["id"]}'");

   	header('Location: ../info_project.php?id='.$stroka["id"]);
 ?>