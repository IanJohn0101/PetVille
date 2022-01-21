<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $vet_contact_number = $_POST['vet_contact_number'];
    $vet_email = $_POST['vet_email'];
    $vet_location = $_POST['vet_location'];
    $vet_name = $_POST['vet_name'];
    
    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(vet_name) AS num FROM veterinarian WHERE vet_name= :vet_name";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':vet_name', $vet_name);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Name of the Veterinarian already exists");</script>';
    }
    else
    {
      $stmt = $dsn->prepare("INSERT INTO veterinarian
      (
        vet_contact_number,
        vet_email,
        vet_location,
        vet_name
      ) 
      VALUES(
        :vet_contact_number,
        :vet_email,
        :vet_location,
        :vet_name
      )");
      $stmt->bindParam(':vet_contact_number', $vet_contact_number);
      $stmt->bindParam(':vet_email', $vet_email);
      $stmt->bindParam(':vet_location', $vet_location);
      $stmt->bindParam(':vet_name', $vet_name);
     
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