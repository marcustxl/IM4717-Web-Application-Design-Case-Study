<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="javascript/update_price.js"></script>
</head>
<body onload="init();">
<header>
</header>
	<div class="wrapper">
		<div class='navbar'>
			<nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../menu.php">Menu</a></li>
            <li><a href="../music.html">Music</a></li>
            <li><a href="../jobs.html">Jobs</a></li>
            <br>
            <li><a href="../update.php">Update</a></li>
            <li><a href="../sales.php">Sales</a></li>
        </ul>
	    </nav>
		</div>
		<div class="content">
      <h1>Latest Updates</h1>

<?php

// Create connection
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$JJEC=$_GET['JJEC_box'];
$CAL_single=$_GET['CALS_box'];
$CAL_double=$_GET['CALD_box'];
$IC_single=$_GET['ICS_box'];
$IC_double=$_GET['ICD_box'];

if (isset($_GET['JJ_ckb'])){
	// Just Java Endless cup
	$sql = "UPDATE f32ee.javajam_menu SET product_price = $JJEC WHERE product_id = 1";

	if (mysqli_query($conn, $sql)) {
		echo "Updated price of Just Java Endless cup";
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
}

if (isset($_GET['CAL_ckb'])){
	// Cafe au Lait Single
	$sql = "UPDATE f32ee.javajam_menu SET product_price = $CAL_single WHERE product_id = 2";

	if (mysqli_query($conn, $sql)) {
		echo "<br>Updated price of Cafe au Lait Single";
	} else {
		echo "<br>Error updating record: " . mysqli_error($conn);
	}

	// Cafe au Lait Double
	$sql = "UPDATE f32ee.javajam_menu SET product_price = $CAL_double WHERE product_id = 3";

	if (mysqli_query($conn, $sql)) {
		echo "<br>Updated price of Cafe au Lait Double";
	} else {
		echo "<br>Error updating record: " . mysqli_error($conn);
	}
}

if (isset($_GET['IC_ckb'])){
	// Iced Cappuccino Single
	$sql = "UPDATE f32ee.javajam_menu SET product_price = $IC_single WHERE product_id = 4";

	if (mysqli_query($conn, $sql)) {
		echo "<br>Updated price of Iced Cappuccino Single";
	} else {
		echo "<br>Error updating record: " . mysqli_error($conn);
	}

	// Iced Cappuccino Double
	$sql = "UPDATE f32ee.javajam_menu SET product_price = $IC_double WHERE product_id = 5";

	if (mysqli_query($conn, $sql)) {
		echo "<br>Updated price of Iced Cappuccino Double";
	} else {
		echo "<br>Error updating record: " . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>
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
