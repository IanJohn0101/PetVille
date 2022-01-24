<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if(ISSET($_POST['submit'])){
        if($_POST['admin_email'] != "" || $_POST['admin_password'] != ""){
            $admin_email = $_POST['admin_email'];
            $admin_password = $_POST['admin_password'];
            $sql = "SELECT * FROM `admintbl` WHERE `admin_email`=? AND `admin_password`=? ";
            $query = $conn->prepare($sql);
            $query->execute(array($admin_email,$admin_password));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if($row > 0) {
				header('location:adminHome.php');
            } else{
                echo"<center><h5 class='text-danger'>Invalid username or password</h5></center>";
            }
        }
    }
?>