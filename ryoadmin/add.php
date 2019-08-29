<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>

<form action="add.php" method="POST">
  NameOfProduct<br>
  <input type="text" name="NameOfProduct">
  <br>
  Price<br>
  <input type="number" name="Price">
  <br>Category<br>
  <input type="text" name="Category">
  <br><br>
  <input type="submit" value="Add" name="add">
</form> 
</body>
<?php
  $pdo= new PDO('pgsql:host=ec2-174-129-227-146.compute-1.amazonaws.com; port=5432; dbname=d4ssom5m1a0dhb', 'mfhnnfiaflhfhb', 'eae4d620d0929b80b9b4bac6ff6706a0b45cef99ce00a5e85f9a3ff6a1e335d4');
  if(!isset($_POST['add']))
  {

  }
  else
  {
            $sql = "insert into product(nameofproduct, price, category) values (:name, :price, :category)";
            $query = $pdo->prepare($sql);
            $query->bindparam(':name', $_POST['NameOfProduct']);
            $query->bindparam(':price', $_POST['Price']);
            $query->bindparam(':category', $_POST['Category']);
            $query->execute();
            echo'<script language="javascript">alert("Add product successfully");window.location="admin.php";</script>';
  }
?>
</html>
