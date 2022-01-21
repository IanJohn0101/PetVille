<?php
	include 'includes/config.php';

	if(isset($_SESSION['user_email'])){
		$sql = "SELECT * FROM users_table WHERE id = '".$_SESSION['user_email']."'";
		$query = $conn->query($sql);
		$email = $query->fetch_assoc();
	}

?>