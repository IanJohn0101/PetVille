<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $vet_id = $_GET['id'];

        $query = "SELECT * FROM veterinarian WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $vet_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);

    }
    
    if(isset($_POST['delete_vet']))
    {
        $sql = "DELETE FROM veterinarian WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $data = 
        [
            'id' => $vet_id
        ];
        $query_execute = $stmt->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully!";
            header('Location:viewVeterinarian.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('Location:viewVeterinarian.php');
            exit(0);
        }
    }
?>