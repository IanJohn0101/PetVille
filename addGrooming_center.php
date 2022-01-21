<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $grooming_center = $_POST['grooming_center'];
    $grooming_center_email = $_POST['grooming_center_email'];
    $grooming_center_contact_number = $_POST['grooming_center_contact_number'];
    $grooming_center_location = $_POST['grooming_center_location'];
    
    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(grooming_center) AS num FROM groomingcentertbl WHERE grooming_center= :grooming_center";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':grooming_center', $grooming_center);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Name of the Grooming Center already exists");</script>';
    }
    else
    {
      $stmt = $dbh->prepare("INSERT INTO groomingcentertbl
      (
        grooming_center,
        grooming_center_email,
        grooming_center_contact_number,
        grooming_center_location
      ) 
      VALUES(
        :grooming_center,
        :grooming_center_email,
        :grooming_center_contact_number,
        :grooming_center_location,
      )");
      $stmt->bindParam(':grooming_center', $grooming_center);
      $stmt->bindParam(':grooming_center_email', $grooming_center_email);
      $stmt->bindParam(':grooming_center_contact_number', $grooming_center_contact_number);
      $stmt->bindParam(':grooming_center_location', $grooming_center_location);
      
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