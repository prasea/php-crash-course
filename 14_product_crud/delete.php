<?php 
 try{
     $conn = new PDO("mysql:host=localhost;dbname=products_crud", "root", "");
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $pe){
     die("CONNECTION FAILED". $pe->getMessage());
 }
 $id = $_POST['id'] ?? null;
 
 if(!$id){
     header('Location: index.php');
     exit;
 }
$statement = $conn->prepare("DELETE FROM products WHERE id = $id");
$statement->execute();
header('Location: index.php');

?>