<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $groom_id = $_GET['id'];

        $query = "SELECT * FROM groomingcentertbl WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $groom_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);

    }
    
    if(isset($_POST['delete_grooming_center']))
    {
        $sql = "DELETE FROM groomingcentertbl WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $data = 
        [
            'id' => $groom_id
        ];
        $query_execute = $stmt->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully!";
            header('Location:viewGroomingCenter.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('Location:viewGroomingCenter.php');
            exit(0);
        }
    }
?>