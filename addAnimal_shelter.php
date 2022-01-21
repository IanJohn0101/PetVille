<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $animal_boarding_name = $_POST['animal_boarding_name'];
    $animal_boarding_contact_number = $_POST['animal_boarding_contact_number'];
    $animal_boarding_email = $_POST['animal_boarding_email'];
    $animal_boarding_location = $_POST['animal_boarding_location'];
    $animal_boarding_img = $_POST['animal_boarding_name'];
    
    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(animal_boarding_name) AS num FROM animal_shelter_tbl WHERE animal_boading_name = :animal_boarding_name";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':animal_boarding_name', $animal_boarding_name);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Name of the Animal Shelter already exists");</script>';
    }
    else
    {
      $stmt = $dsn->prepare("INSERT INTO animal_shelter_tbl
      (
        animal_boarding_name,
        animal_boarding_contact_number,
        animal_boarding_email,
        animal_boarding_location,
        animal_boarding,img
      ) 
      VALUES(
        :animal_boarding_name,
        :animal_boarding_contact_number,
        :animal_boarding_email,
        :animal_boarding_location,
        :animal_boarding,img
      )");
      $stmt->bindParam(':animal_boarding_name', $animal_boarding_name);
      $stmt->bindParam(':animal_boarding_contact_number', $animal_boarding_contact_number);
      $stmt->bindParam(':animal_boarding_email', $animal_boarding_email);
      $stmt->bindParam(':animal_boarding_location', $animal_boarding_location);
      $stmt->bindParam(':animal_boarding_img', $animal_boarding_img);
      
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