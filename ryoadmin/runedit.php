<?php
     $pdo= new PDO('pgsql:host=ec2-174-129-227-146.compute-1.amazonaws.com; port=5432; dbname=d4ssom5m1a0dhb', 'mfhnnfiaflhfhb', 'eae4d620d0929b80b9b4bac6ff6706a0b45cef99ce00a5e85f9a3ff6a1e335d4');
     $namep = $_POST['NameOfProduct'];
     $price= $_POST['Price'];
     $id = $_POST['id'];
     $category = $_POST['Category'];
     $query = "UPDATE product SET nameofproduct = '$namep', price= '$price', category ='$category' WHERE id= $id";
     $res = $pdo->prepare($query);
     $res->execute();
     if($pdo->exec($query)==TRUE)
     {
        echo'<script language="javascript">alert("Edit sucessfully"); window.location="admin.php";</script>';
     }
     else
     {
        echo'<script language="javascript">alert("Edit fail");</script>';
     }
?> 