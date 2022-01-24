<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_GET['id'])){
        $prod_id = $_GET['id'];

        $query = "SELECT * FROM products WHERE id=:id LIMIT 1";
        $stmt = $conn->prepare($query);
        $data = ['id' => $prod_id];
        $stmt->execute($data);

        $result = $stmt->fetch(PDO::FETCH_OBJ);
    }
    if(isset($_POST['update']))
    {
        $product_name=$_POST["product_name"];
        $product_brand=$_POST["product_brand"];
        $product_category=$_POST["product_category"];
        $product_price=$_POST["product_price"];
        $product_quantity=$_POST["product_quantity"];
        
            $query = "UPDATE products SET 
            product_name=:product_name,
            product_brand=:product_brand,
            product_category=:product_category,
            product_price=:product_price,
            product_quantity=:product_quantity
            WHERE id=:id";
            $stmt = $conn->prepare($query);

        $stmt->execute(array
        (
            "product_name"=>$product_name,
            "product_brand"=>$product_brand,
            "product_category"=>$product_category,
            "product_price"=>$product_price,
            "product_quantity"=>$product_quantity,
            "id"=>$prod_id
        ));
        if($stmt->execute())
        {
            header('location:viewProducts.php');
            echo '<script>alert("updated successfully!")</script>';
        }    
    }
?>



