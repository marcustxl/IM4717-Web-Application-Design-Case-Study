<?php
//Ensure that database connection is good before any code is executed.
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
//Declare variables

$JJ_qty=$_GET['Item1_Quantity'];
$CAL_qty=$_GET['Item2_Quantity'];
$IC_qty=$_GET['Item3_Quantity'];
$CAL_radio=$_GET['CAL_radio'];
$IC_radio=$_GET['IC_radio'];

if($JJ_qty == 0 && $CAL_qty == 0 && $IC_qty == 0) {
	echo "Select products you'd like to order before submitting.<br>";
	return;
}

else {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	if ($CAL_radio == "CAL_Single") {
		$CALS_qty = $CAL_qty;
		$CALD_qty = 0;
	}
	if ($CAL_radio == "CAL_Double") {
		$CALS_qty = 0;
		$CALD_qty = $CAL_qty;
	}
	if ($IC_radio == "IC_Single") {
		$ICS_qty = $IC_qty;
		$ICD_qty = 0;
	}
	if ($IC_radio == "IC_Double") {
		$ICS_qty = 0;
		$ICD_qty = $IC_qty;
	}

	$sql = "INSERT INTO f32ee.javajam_orders(orders_id, JJ_orders, CALS_orders, CALD_orders,
												ICS_orders, ICD_orders)
	VALUES (NULL, $JJ_qty, $CALS_qty, $CALD_qty, $ICS_qty, $ICD_qty);";

	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update value for orders: " . mysqli_error($conn);
	}

	$JJ_total = $JJ_qty*getCurrentPrice(1);
	$CALS_total = $CALS_qty*getCurrentPrice(2);
	$CALD_total = $CALD_qty*getCurrentPrice(3);
	$ICS_total = $ICS_qty*getCurrentPrice(4);
	$ICD_total = $ICD_qty*getCurrentPrice(5);


	$sql = "INSERT INTO f32ee.javajam_sales(sales_id, JJ_sales, CALS_sales, CALD_sales,
												ICS_sales, ICD_sales)
			VALUES (NULL, $JJ_total, $CALS_total, $CALD_total, $ICS_total, $ICD_total);";

	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update value for sales: " . mysqli_error($conn);
	}

	mysqli_close($conn);

	$totalOrder = "Order placed for:<br>";
	if ($JJ_qty > 0){
		$totalOrder .= "$JJ_qty Just Java for $$JJ_total<br>";
	}
	if ($CALS_qty > 0) {
		$totalOrder .= "$CALS_qty Cafe au Lait Single for $$CALS_total<br>";
	}
	if ($CALD_qty > 0) {
		$totalOrder .= "$CALD_qty Cafe au Lait Double for $$CALD_total<br>";
	}
	if ($ICS_qty > 0) {
		$totalOrder .= "$ICS_qty Cappuccino Single for $$ICS_total<br><br>";
	}
	if ($ICD_qty > 0) {
		$totalOrder .= "$ICD_qty Cappuccino Double for $$ICD_total<br><br>";
	}
	echo $totalOrder;
	$menuLink = "<a href='../../CaseStudy_4_Final/menu.php'>Click here</a>";
	echo "Redirecting you to Menu page in 10 seconds. $menuLink to return to menu page now.";
	header("refresh:10;url=../../CaseStudy_4_Final/menu.php");
	return;

}


function getCurrentPrice($product_id) {
	$conn = mysqli_connect("localhost", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT product_price FROM f32ee.javajam_menu WHERE product_id = $product_id;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get price for product $product_id : " . mysqli_error($conn);
	}
	$result = mysqli_fetch_row($result);
	return $result[0];
}

?>
