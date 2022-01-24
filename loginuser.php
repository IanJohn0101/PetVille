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
      $select_stmt=$database->prepare("SELECT * FROM users_table WHERE user_email=:user_email"); 
      $select_stmt->execute(array(':email'=>$user_email));
      $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
      
      if($select_stmt->rowCount() > 0)
      {
        if($user_email==$Row)
        {

        }
      }
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  