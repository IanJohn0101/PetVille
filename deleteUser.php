<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];

        $query = "SELECT * FROM users_table WHERE user_id=:user_id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['user_id' => $user_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);

    }
    
    if(isset($_POST['delete_user']))
    {
        $sql = "DELETE FROM users_table WHERE user_id=:user_id";
        $stmt = $conn->prepare($sql);
        $data = 
        [
            'user_id' => $user_id
        ];
        $query_execute = $stmt->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully!";
            header('Location:allUsers.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('Location:allUsers.php');
            exit(0);
        }
    }
?>