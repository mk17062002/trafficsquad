<?php
require_once '../connect.php';
	if(ISSET($_POST['save_offense'])){
		$offname = $_POST['offense_name'];
		$offpoints = $_POST['offense_penalty'];
		$conn->query("INSERT INTO `offense_categorie` VALUES('', '$offense_name', '$offense_penalty')") or die(mysqli_error($conn));
		header('location: offense_list.php');
	}

?>