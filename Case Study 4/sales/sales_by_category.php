<!DOCTYPE html>
<html lang="en">

<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="sales.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
			<img src="../assets/javalogo.jpg" class="imgcenter"> <!--from google-->
		</header>
		<nav id="leftcolumn">
			<a href="../index.html">Home</a><br>
			<a href="../menu/menu.php">Menu</a><br>
			<a href="../music.html">Music</a><br>
			<a href="../jobs.html">Jobs</a><br>
			<br>
			<a href="../product/product.php">Update</a><br>
            <a href="sales.html">Sales</a><br>
		</nav>
		<div class="content">
			<h2>Sales Quantities By Product Category</h2>
			<?php include 'sales_by_category_table.php';?>
			<br />
			<p class="center">
				<a href="sales.html">Return to sales</a>
			</p>
		</div>
		<footer>
			<small>
				<i>Copyright &copy; 2014 JavaJam Coffee House</i>
			</small>
			<br>
			<a href="mailto:marcus@too.com">
				marcus@too.com
			</a>
		</footer>
	</div>
	<script src="sales.js"></script>
</body>

</html>
