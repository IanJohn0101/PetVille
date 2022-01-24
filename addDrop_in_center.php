<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $organization_name = $_POST['organization_name'];
    $details = $_POST['details'];
    $location = $_POST['location'];
    
    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(organization_name) AS num FROM drop_in_center WHERE organization_name= :organization_name";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':organization_name', $organization_name);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Name of the Organization already exists");</script>';
    }
    else
    {
      $stmt = $dbh->prepare("INSERT INTO drop_in_center
      (
        organization_name,
        org_location,
        org_details
      ) 
      VALUES(
        :organization_name,
        :org_location,
        :org_details,
      )");
      $stmt->bindParam(':organization_name', $organization_name);
      $stmt->bindParam(':org_location', $org_location);
      $stmt->bindParam(':org_details', $org_details);
      
      if($stmt->execute())
      {
        echo '<script>alert("Added successfully!");</script>';
      }
      else
      {
        $error = "Error: ".$e->getMessage();
        echo '<script>alert("'.$error.'")</script>';
      }
    }
  }
  catch(PDOException $e)
  {
    $error = "Error: ".$e->getMessage();
    echo '<script>alert("'.$error.'")</script>';
  }
}
?>