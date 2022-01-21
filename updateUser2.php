<?php

    $userid = $_GET['user_id'];
    
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_POST["update"])) {
    $pdo_statement=$conn->prepare("update users_table set 
    user_username='" . $_POST[ 'user_username' ] . "', 
    user_email ='" . $_POST[ 'user_email']. "', 
    user_contactnumber ='" . $_POST[ 'user_contactnumber' ]. "' 
    where user_id=" . $_GET["user_id"]);

    $pdo_statement->bindParam(':user_username', $_POST['user_username'], PDO::PARAM_STR);
    $pdo_statement->bindParam(':user_email', $_POST['user_email'], PDO::PARAM_STR);
    $pdo_statement->bindParam(':user_contactnumber', $_POST['user_contactnumber'], PDO::PARAM_STR);
    $result = $pdo_statement->execute();
    if($result) {
        header('location:updateUser.php');
    }
}
    $pdo_statement = $conn->prepare("SELECT * FROM users_table where user_id=" . $_GET["user_id"]);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
?>


