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

$sql = 'DROP TABLE javajam_orders';

if ($conn->query($sql) === TRUE) {
	echo "javajam_orders deleted successfully";
  } else {
	echo "Error deleting record: " . $conn->error;
  }

$sql = 'DROP TABLE javajam_sales';

if ($conn->query($sql) === TRUE) {
  echo "<br>javajam_sales deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$sql = 'DROP TABLE javajam_menu';

if ($conn->query($sql) === TRUE) {
	echo "<br>javajam_menu deleted successfully";
  } else {
	echo "Error deleting record: " . $conn->error;
  }


mysqli_close($conn);
?>
