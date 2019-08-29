<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: index.php");
    }
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | ATN COMPANY</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">ATN Admin</a>
				<ul class="user-menu">
					<p style="color: red;">Hello <?php echo $_SESSION['username'];?></p>
					<a href="logout.php">LogOut</a>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> HOME</a></li>
			<li class="active"><a href="#"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> PRODUCT</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">PRODUCTS</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List Of Product</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="add.php" class="btn btn-primary">Add Product</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">NameOfProduct</th>
											<th>Price</th>
											<th>Category</th>
											<th>Option</th>
										</tr>
									</thead>
									<tbody>
									<?php
									$pdo= new PDO('pgsql:host=ec2-174-129-227-146.compute-1.amazonaws.com; port=5432; dbname=d4ssom5m1a0dhb', 'mfhnnfiaflhfhb', 'eae4d620d0929b80b9b4bac6ff6706a0b45cef99ce00a5e85f9a3ff6a1e335d4');
									$sql = "select * from product";
									$result = $pdo->query($sql);   
									while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
									echo "<tr>";
									echo "<td>".$row['id']."</td>";
									echo "<td>".$row['nameofproduct']."</td>";
									echo "<td>".$row['price']."</td>";
									echo "<td>".$row['category']."</td>"; 
									echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
									}
									?>
										</tr>
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
