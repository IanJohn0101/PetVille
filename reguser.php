<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(user_email) AS num FROM users_table WHERE user_email= :user_email";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_email', $user_email);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Email already exists");</script>';
    }
    else
    {
      $stmt = $dsn->prepare("INSERT INTO users_table 
      (
        user_username, 
        user_email, 
        user_password
      ) 
      VALUES(
          :user_username, 
          :user_email, 
          :user_password
      )");
      $stmt->bindParam(':user_username', $user_username);
      $stmt->bindParam(':user_email', $user_email);
      $stmt->bindParam(':user_password', $user_password);

      if($stmt->execute())
      {
        echo '<script>alert("Registration successful!");</script>';
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