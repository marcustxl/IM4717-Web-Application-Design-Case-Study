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
header("refresh:1; url=../../CaseStudy_4_Final/update.php");
?>
