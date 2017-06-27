<?php
//READ FROMT HE DATABASE

include ('db.php');

$sql = "SELECT p_title FROM projects"; 
$result = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
echo "<ul>";
while($row = $result->fetch_assoc()){
	echo "<li>" . $row['p_title'] . " </li>";
	}
echo "</ul>";
?>