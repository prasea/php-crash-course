<?php 
  try{
    $conn = new PDO("mysql:hostname=localhost;port=3306;dbname=products_crud;", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
  }catch(PDOException $pe){
      die("Connection Failed ".$pe->getMessage());
  }
  $search = $_GET['searched'] ?? '';
  if($search){
    $statement = $conn->prepare("SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC");
    $statement->bindValue(':title', "%$search%");
  } else{
    $statement = $conn->prepare('SELECT * FROM products ORDER BY create_date DESC'); 
  }
  $statement->execute();
  $products_record = $statement->fetchAll(PDO::FETCH_ASSOC);   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body{
            padding: 50px;
        }
        .img-fluid{
            width: 50px;
        }
    </style>

    <title></title>
  </head>
  <body>
    <form action="" method="get">
      <div class="input-group mb-3">
	      <input type="text" class="form-control" placeholder="Search Product name" name="searched" value="<?= $search; ?>">
	      <button class="btn btn-outline-secondary" type="submit" >Search</button>
	    </div>
    </form>
    <h1>Product CRUD</h1>
    <a href="create.php" class="btn btn-success">Add Product</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Created_date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products_record as $i=>$product): ?>    
    <tr>
      <th scope="row"><?= $product['id']?></th>
      <td>  <img src="<?= $product['image'];?>" class="img-fluid">   </td>
      <td><?= $product['title']; ?></td>
      <td><?= $product['price']; ?></td>
      <td><?= $product['create_date']; ?></td>
      <td>        
          <form action="delete.php" method="post"style="display:inline-block;">
            <input type="hidden" name="id" value="<?= $product['id']?>">
            <button type="submit" class="btn btn-outline-danger" >DELETE</button>
          </form>
          <a href="update.php?id=<?= $product['id'] ?>" class="btn btn-outline-primary">EDIT</a>
      </td>
    </tr>    
    <?php endforeach; ?>
  </tbody>
</table>

  </body>
</html>