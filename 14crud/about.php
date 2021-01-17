<?php 
 try{
    $conn = new PDO('mysql:host=localhost;dbname=test1', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
} catch(PDOException $pe){
    die("Connection failed". $pe->getMessage());
}
 $id = $_GET['id'];
 $statement = $conn->prepare("SELECT * FROM products WHERE id = $id");
 $statement->execute();
 $product = $statement->fetch(PDO::FETCH_ASSOC);
 echo '<pre>';
 var_dump($product);
 echo '</pre>';
?>

