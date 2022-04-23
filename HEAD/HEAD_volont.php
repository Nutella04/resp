<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'resp');

	$queryYES_NO = mysqli_query($con, "UPDATE projects SET vol_yes_no = '{$_POST["vol_yes_no"]}' WHERE id='{$_GET["id"]}'");
	$queryMAX = mysqli_query($con, "UPDATE projects SET max_vol = '{$_POST["max_vol"]}' WHERE id='{$_GET["id"]}'");
	$queryTEXT = mysqli_query($con, "UPDATE projects SET vol_text = '{$_POST["vol_text"]}' WHERE id='{$_GET["id"]}'");

	header('Location: ../projects.php');
 ?>