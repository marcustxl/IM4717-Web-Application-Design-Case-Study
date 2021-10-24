<?php
function insert_row($id) {
    // Create connection
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

    // Connection error check
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Take from database
    $sql = "SELECT product_price FROM f32ee.javajam_menu WHERE product_id = $id;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        echo number_format((float)$row["product_price"], 2, '.', '');
    } else {
		echo "-";
	}
    mysqli_close($conn);
}
?>
