
<?php
define('BASEPATH', true);
require 'connect.php';

if(isset($_POST['update'])){
  try{
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id=intval($_GET['id']);

        $file_name = $_FILES['products']['product_img'];
        $file_temp = $_FILES['products']['product_img_temp'];
        $file_size = $_FILES['products']['product_img_size'];
        $file_type = $_FILES['products']['product_img_type'];
        
        $location = "upload/".$file_name;

        if($file_size < 25000)
        {
            if(move_uploaded_file($file_temp, $location))
            {
                try
                {
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE products SET product_img='$location' WHERE id=$id'";
                    $dbh->execute($sql);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                $dbh = null;
                header('location:viewProducts.php');
            }
        }
        else
        {
            echo '<script>Alert("Your file was too large to upload.")</script>';
        }
    }
    catch(PDOException $e)
    {
        $error = "Error: ".$e->getMessage();
        echo '<script>alert("'.$error.'")</script>';
    }
}
?> 