<?php
//READ FROM THE DATABASE

include ('db.php');

$sql = "SELECT p_title FROM projects";
$projects = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
$sql = "SELECT g_title FROM goals";
$goals = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
$sql = "SELECT h_title FROM habits";
$habits = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
$sql = "SELECT f_title FROM fears";
$fears = $conn->query($sql) or trigger_error($conn->error. " [$sql]");

/*echo "<ul>";
while($row = $projects->fetch_assoc()){
	echo "<li>" . $row['p_title'] . " </li>";
	}
echo "</ul>";*/
$conn-close();
?>