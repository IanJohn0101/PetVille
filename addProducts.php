<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['submit'])){
  try{
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    $product_img = $_FILES["product_img"]["name"];
    $tmp_dir = $_FILES["product_img"]["tmp_name"];
    $imgSize = $_FILES["product_img"]["size"];
    
    $upload_dir ='PetVille/uploads/';
    $imgExt = strtolower(pathinfo($product_img,PATHINFO_EXTENSION));
    $valid_ext = array(
      'jpeg',
      'jpg',
      'png',
      'gif',
      'pdf'
    );
    $product_img_size=rand(1000, 1000000).".".$imgExt;
    move_uploaded_file($tmp_dir, $upload_dir.$product_img_size);
    //$user_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12)); // para verify ra if pila ka characters ang dawaton
    $sql = "SELECT COUNT(product_name) AS num FROM products WHERE product_name= :product_name";  // check if ni exist naba ang email nga gi provide
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':product_name', $product_name);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0)
    {        
      echo '<script>alert("Product name already exists");</script>';
    }
    else
    {
      $stmt = $dbh->prepare("INSERT INTO products
      (
        product_name,
        product_category,
        product_brand,
        product_price,
        product_quantity,
        product_img
      ) 
      VALUES(
        :product_name,
        :product_category,
        :product_brand,
        :product_price,
        :product_quantity,
        :product_img_size
      )");
      $stmt->bindParam(':product_name', $product_name);
      $stmt->bindParam(':product_category', $product_category);
      $stmt->bindParam(':product_brand', $product_brand);
      $stmt->bindParam(':product_price', $product_price);
      $stmt->bindParam(':product_quantity', $product_quantity);
      $stmt->bindParam(':product_img_size', $product_img_size);
      
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