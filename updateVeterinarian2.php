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
    if(isset($_POST['update']))
    {
        $vet_name=$_POST["vet_name"];
        $vet_email=$_POST["vet_email"];
        $vet_contact_number=$_POST["vet_contact_number"];
        $vet_location=$_POST["vet_location"];
              
            $query = "UPDATE veterinarian SET 
            vet_name=:vet_name,
            vet_email=:vet_email,
            vet_contact_number=:vet_contact_number,
            vet_location=:vet_location
            WHERE id=:id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            "vet_name"=>$vet_name,
            "vet_email"=>$vet_email,
            "vet_contact_number"=>$vet_contact_number,
            "vet_location"=>$vet_location,
            "id"=>$vet_id
        ));
        if($stmt->execute())
        {
            header('location:viewVeterinarian.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



