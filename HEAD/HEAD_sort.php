<?php session_start() ?>
<?php 
	header('Location: ../projects.php?sort='.$_POST["sort"]);
 ?>