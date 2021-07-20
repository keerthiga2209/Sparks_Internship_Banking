<!-- Connection Page -->

<?php

	echo"<br/>Welcome ";echo"fine";
	$servername = "localhost";
$username = "root";
$password ="root";
$dbname="k1";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else

echo "<br/>Connected successfully";

?>