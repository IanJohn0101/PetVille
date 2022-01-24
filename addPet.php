<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $adoption_pet_name = $_POST['adoption_pet_name'];
    $adoption_pet_breed = $_POST['adoption_pet_breed'];
    $adoption_pet_color = $_POST['adoption_pet_color'];
    $adoption_pet_age = $_POST['adoption_pet_age'];
    $adoption_pet_img = $_POST['adoption_pet_img'];

    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(adoption_pet_img) AS num FROM adoptiontbl WHERE adoption_pet_img= :adoption_pet_img";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':adoption_pet_img', $adoption_pet_img);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Image already exists");</script>';
    }
    else
    {
      $stmt = $dbh->prepare("INSERT INTO adoptiontbl
      (
        adoption_pet_name,
        adoption_pet_breed,
        adoption_pet_age,
        adoption_pet_color,
        adoption_pet_img
      ) 
      VALUES(
        :adoption_pet_name,
        :adoption_pet_breed,
        :adoption_pet_age,
        :adoption_pet_color,
        :adoption_pet_img
      )");
      $stmt->bindParam(':adoption_pet_name', $adoption_pet_name);
      $stmt->bindParam(':adoption_pet_breed', $adoption_pet_breed);
      $stmt->bindParam(':adoption_pet_age', $adoption_pet_age);
      $stmt->bindParam(':adoption_pet_color', $adoption_pet_color);
      $stmt->bindParam(':adoption_pet_img', $adoption_pet_img);
     
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