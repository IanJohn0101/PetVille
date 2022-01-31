<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $prod_id = $_GET['id'];

        $query = "SELECT * FROM drop_in_center WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $prod_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    if(isset($_POST['update']))
    {
        $organization_name=$_POST["organization_name"];
        $org_details=$_POST["org_details"];
        $org_location=$_POST["org_location"];
        
            $query = "UPDATE drop_in_center SET 
            organization_name=:organization_name,
            org_details=:org_details,
            org_location=:org_location
            WHERE id=:id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            "organization_name"=>$organization_name,
            "org_details"=>$org_details,
            "org_location"=>$org_location,
            "id"=>$prod_id
        ));
        if($stmt->execute())
        {
            header('location:viewDropinCenter.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



