<?php 

$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "used_cars";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
		echo "connected succesffuly";
	$sql = "SELECT id, make, model, dateman, miles, price FROM car_roster";
	$result = $conn->query($sql);
?>