<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $prod_id = $_GET['id'];

        $query = "SELECT * FROM groomingcentertbl WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $prod_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    if(isset($_POST['update']))
    {
        $grooming_center=$_POST["grooming_center"];
        $grooming_center_email=$_POST["grooming_center_email"];
        $grooming_center_contact_number=$_POST["grooming_center_contact_number"];
        $grooming_center_location=$_POST["grooming_center_location"];
        
            $query = "UPDATE groomingcentertbl SET 
            grooming_center=:grooming_center,
            grooming_center_email=:grooming_center_email,
            grooming_center_contact_number=:grooming_center_contact_number,
            grooming_center_location=:grooming_center_location
            WHERE id=:id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            "grooming_center"=>$grooming_center,
            "grooming_center_email"=>$grooming_center_email,
            "grooming_center_contact_number"=>$grooming_center_contact_number,
            "grooming_center_location"=>$grooming_center_location,
            "id"=>$prod_id
        ));
        if($stmt->execute())
        {
            header('location:viewGroomingCenter.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



