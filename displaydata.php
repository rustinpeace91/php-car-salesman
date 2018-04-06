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
	$sql = "SELECT Make, Model, Year, Miles, Price FROM roster";
	$result = $conn->query($sql);

	if ($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["Make"] . "</td>"; 
			echo "<td>" . $row["Model"] . "</td>";
			echo "<td>" . $row["Year"] . "</td>";
			echo "<td>" . $row["Miles"] . "</td>";
			echo "<td>" . $row["Price"] . "</td>";
			
			echo "</tr>";
		}
	} else {
		echo "no data yet";
	}

	$conn->close();

?>