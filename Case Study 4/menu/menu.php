<!DOCTYPE html>
<html lang="en">

<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="menu.js"></script>
</head>

<body>
	<?php include 'menu_order.php'; ?>
	<div id="wrapper">
		<header>
			<img src="../assets/javalogo.jpg" class="imgcenter"> <!--from google-->
		</header>
		<nav id="leftcolumn">
			<a href="../index.html">Home</a><br>
			<a href="menu.php">Menu</a><br>
			<a href="../music.html">Music</a><br>
			<a href="../jobs.html">Jobs</a><br>
			<br>
			<a href="../product/product.php">Update</a><br>
      <a href="../sales/sales.html">Sales</a><br>
		</nav>
		<div class="content">
			<h2>Coffee at JavaJam</h2>
			<?php include 'menu_table.php'; ?>
			<br />
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
</body>

</html>
