<!DOCTYPE html>
<html lang="en">
<?php
include "php/update_table.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Admin: Product Price Update</title>
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="javascript/update_admin.js"></script>
</head>
<body>
<header>
</header>
<div class="wrapper">
    <div class="navbar">
            <nav>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="menu.php">Menu</a></li>
                  <li><a href="music.html">Music</a></li>
                  <li><a href="jobs.html">Jobs</a></li>
                  <br>
                  <li><a href="update.php">Update</a></li>
                  <li><a href="sales.php">Sales</a></li>
                </ul>
            </nav>
        </div>
    <div class="content">
        <h1>Click to generate daily sales report:<br></h1>
		<form action="php/generatesales.php" method="get">
			<label class="salestable"><input name="sales" value="total" type="radio" checked="checked">&nbsp;&nbsp;&nbsp;&nbsp;Total dollar sales by product<br></label>
			<label class="salestable"><input name="sales" value="quant" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;Sales quantities by product categories<br><br></label>
			<input type="submit" value="Generate Sales">
		</form>
    </div>
</div>

<footer>
  <br>
  <small>
    <i>Copyright &copy; 2014 JavaJam Coffee House
    </i>
  </small>
  <br>
  <a href="mailto:marcus@too.com">
    marcus@too.com
  </a>
</footer>
</body>
</html>
