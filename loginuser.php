<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "petsociety";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["submit"]))  
      {  
           if(empty($_POST["user_email"]) || empty($_POST["user_password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users_table WHERE user_email = :user_email AND user_password = :user_password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'user_email'     =>     $_POST["user_email"],  
                          'user_password'     =>     $_POST["user_password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["user_email"] = $_POST["user_email"];  
                     header("location:home.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  