<?php

include 'db.php';
	if ($result->num_rows > 0 ){
		$iterator = 1;
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $iterator . "</td>";
			echo "<td>" . $row["make"] . "</td>"; 
			echo "<td>" . $row["model"] . "</td>";
			echo "<td>" . $row["dateman"] . "</td>";
			echo "<td>" . $row["miles"] . " Miles</td>";
			echo "<td>$" . $row["price"] . "</td>";
			
			echo "</tr>";
			$iterator++;
		}
	} else {
		echo "no data yet";
	}

	$conn->close();

?>