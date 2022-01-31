<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $prod_id = $_GET['id'];

        $query = "SELECT * FROM animal_shelter_tbl WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $prod_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    if(isset($_POST['update']))
    {
        $animal_boarding_name=$_POST["animal_boarding_name"];
        $animal_boarding_contact_number=$_POST["animal_boarding_contact_number"];
        $animal_boarding_email=$_POST["animal_boarding_email"];
        $animal_boarding_location=$_POST["animal_boarding_location"];
        
            $query = "UPDATE animal_shelter_tbl SET 
            animal_boarding_name=:animal_boarding_name,
            animal_boarding_contact_number=:animal_boarding_contact_number,
            animal_boarding_email=:animal_boarding_email,
            animal_boarding_location=:animal_boarding_location
            WHERE id=:id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            "animal_boarding_name"=>$animal_boarding_name,
            "animal_boarding_contact_number"=>$animal_boarding_contact_number,
            "animal_boarding_email"=>$animal_boarding_email,
            "animal_boarding_location"=>$animal_boarding_location,
            "id"=>$prod_id
        ));
        if($stmt->execute())
        {
            header('location:viewAnimalShelter.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



