<?php 

    include "db-config.php";

	$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
		echo "connected succesffuly";
	$sql = "SELECT id, make, model, dateman, miles, price FROM car_roster";
	$result = $conn->query($sql);
?>