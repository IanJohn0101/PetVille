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
    if(isset($_POST['update']))
    {
        $user_username=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_contactnumber=$_POST['user_contactnumber'];
        $user_password=$_POST['user_password'];

            $query = "UPDATE users_table SET 
            user_username=:user_username,
            user_email=:user_email,
            user_contactnumber=:user_contactnumber,
            user_password=:user_password WHERE user_id=:user_id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            ":user_username"=>$user_username,
            ":user_email"=>$user_email,
            ":user_contactnumber"=>$user_contactnumber,
            ":user_password"=>$user_password,
            ":user_id"=>$user_id
        ));
        if($stmt->execute())
        {
            header('location:allUsers.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



