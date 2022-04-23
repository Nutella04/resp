<?php session_start() ?>
<?php 
	header('Location: ../projects.php?search='.$_POST["search"]);
 ?>