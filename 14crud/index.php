<?php 
try{
    $conn = new PDO('mysql:host=localhost;dbname=test1', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
} catch(PDOException $pe){
    die("Connection failed". $pe->getMessage());
}
$statement = $conn->prepare("SELECT * FROM products ORDER BY created_date DESC");
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($products);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $i=>$product): ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $product['title'];?></td>
            <td><?= $product['image'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><a href="about.php?id=<?= $product['id'] ?>" class="btn btn-secondary">Read More</a></td>
            <td><?= $product['created_date']; ?></td>
            <td>
                <button type="button" class="btn btn-outline-danger">DELETE</button>
                <button type="button" class="btn btn-outline-warning">EDIT</button>
            </td>
        </tr>    
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>