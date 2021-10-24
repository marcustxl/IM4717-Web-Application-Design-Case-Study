<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$database = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create product table
$sql = "CREATE TABLE IF NOT EXISTS javajam_menu (
	product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	product_name VARCHAR(30) NOT NULL,
	product_price DOUBLE NOT NULL
	)";
if (mysqli_query($conn, $sql)) {
	echo "Table javajam_menu created successfully";
} else {
	echo "Error creating javajam_menu Table: " . mysqli_error($conn);
}


// sql to create orders table
$sql = "CREATE TABLE IF NOT EXISTS javajam_orders (
	orders_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	JJ_orders INT UNSIGNED,
	CALS_orders INT UNSIGNED,
	CALD_orders INT UNSIGNED,
	ICS_orders INT UNSIGNED,
	ICD_orders INT UNSIGNED
	)";
if (mysqli_query($conn, $sql)) {
	echo "<br>Table javajam_orders created successfully";
} else {
	echo "<br>Error creating javajam_menu Table: " . mysqli_error($conn);
}


// sql to create sales table
$sql = "CREATE TABLE javajam_sales (
	sales_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	JJ_sales DOUBLE NOT NULL,
	CALS_sales DOUBLE NOT NULL,
	CALD_sales DOUBLE NOT NULL,
	ICS_sales DOUBLE NOT NULL,
	ICD_sales DOUBLE NOT NULL
	)";
if (mysqli_query($conn, $sql)) {
	echo "<br>Table javajam_sales created successfully";
} else {
	echo "<br>Error creating javajam_sales Table: " . mysqli_error($conn);
}


// check if empty
$sql = "SELECT * FROM javajam_menu";
$result = mysqli_query($conn, $sql) or die ("<br>Error in query: $sql. ".mysql_error());

if (mysqli_num_rows($result) > 0) {
 echo "<br>Table is not Empty";
}
else {
	echo "<br>Table is Empty, adding new records";
	//sql to insert into product table
	$sql = "INSERT INTO javajam_menu (product_id, product_name, product_price)
	VALUES (NULL, 'Just Java Endless cup', 2.00);";
	$sql .= "INSERT INTO javajam_menu (product_id, product_name, product_price)
	VALUES (NULL, 'Cafe au Lait Single', 2.00);";
	$sql .= "INSERT INTO javajam_menu (product_id, product_name, product_price)
	VALUES (NULL, 'Cafe au Lait Double', 3.00);";
	$sql .= "INSERT INTO javajam_menu (product_id, product_name, product_price)
	VALUES (NULL, 'Iced Cappuccino Single', 4.75);";
	$sql .= "INSERT INTO javajam_menu (product_id, product_name, product_price)
	VALUES (NULL, 'Iced Cappuccino Double', 5.75);";

	$sql .= "INSERT INTO javajam_sales (product_id, totals)
	VALUES (1, 0.0);";
	$sql .= "INSERT INTO javajam_sales (product_id, totals)
	VALUES (2, 0.0);";
	$sql .= "INSERT INTO javajam_sales (product_id, totals)
	VALUES (3, 0.0);";
	$sql .= "INSERT INTO javajam_sales (product_id, totals)
	VALUES (4, 0.0);";
	$sql .= "INSERT INTO javajam_sales (product_id, totals)
	VALUES (5, 0.0);";
	if (mysqli_multi_query($conn, $sql)) {
		echo "<br>New records created successfully";
	} else {
		echo "<br>Error inserting into product table: " . mysqli_error($conn);
	}
}


mysqli_close($conn);
?>
