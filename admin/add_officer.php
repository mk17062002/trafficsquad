<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_officer'])){	
		$p_id = $_POST['p_id'];
		$uname = $_POST['uname'];
		$pname = $_POST['pname'];
		$posting = $_POST['posting'];
		$post_id = $_POST['post_id'];
		$pno = $_POST['pno'];
		$email = $_POST['email'];
		$psw = $_POST['psw'];
		$a_query = $conn->query("SELECT * FROM `p_info` WHERE `p_id` = '$p_id'") or die(mysqli_error($conn));
		$a_valid = $a_query->num_rows;
		if($a_valid > 0){
			echo "<script>alert('Username already taken')</script>";
			echo "<script>window.location = 'officer.php'</script>";
		}else{
			$conn->query("INSERT INTO `p_info` VALUES( '$p_id','$uname','$pname','$posting','$post_id','$pno','$email','$psw')") or die(mysqli_error($conn));
			header('location:officer.php');
		}
	}	
?>
