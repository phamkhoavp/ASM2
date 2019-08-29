<!DOCTYPE html>
<html>
<body>
<h2>Edit Product</h2>
<?php 
            $pdo= new PDO('pgsql:host=ec2-174-129-227-146.compute-1.amazonaws.com; port=5432; dbname=d4ssom5m1a0dhb', 'mfhnnfiaflhfhb', 'eae4d620d0929b80b9b4bac6ff6706a0b45cef99ce00a5e85f9a3ff6a1e335d4');
            $id = $_GET['id'];
            $sql1 = "Select * from product where id = :id";
            $query = $pdo->prepare($sql1);
            $query->execute(array(':id' => $id));
            while($row = $query->fetch(PDO::FETCH_ASSOC))
            {
                $id = $row['id'];
                $name = $row['nameofproduct'];
                $price = $row['price'];
                $category = $row['category'];

            }
        ?>
<form action="runedit.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  NameOfProduct<br>
  <input type="text" name="NameOfProduct" value="<?php echo $name; ?>">
  <br>
  Price<br>
  <input type="text" name="Price" value="<?php echo $price; ?>">
  <br>Category<br>
  <input type="text" name="Category" value="<?php echo $category; ?>">
  <br><br>
  <input type="submit" value="Edit">
</form> 
</body>
</html>
