<?php
//READ FROM THE DATABASE
include ('db.php');

switch($data){
	case "goal":
		$sql = "SELECT title FROM goals";
		$goals = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "project":
		$sql = "SELECT title FROM projects";
		$projects = $conn->query($sql) or trigger_error($conn->error. " [$sql]");	
		break;
	case "habit":
		$sql = "SELECT title FROM habits";
		$habits = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "fear":
		$sql = "SELECT title FROM fears";
		$fears = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "active":
		$sql = "SELECT title FROM fears WHERE active='1' UNION SELECT title FROM goals WHERE active='1'	UNION SELECT title FROM projects WHERE active='1' UNION SELECT title FROM habits WHERE active='1'"; 
		$active = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "done":
		$sql = "SELECT title FROM fears WHERE done='1' UNION SELECT title FROM goals WHERE done='1'	UNION SELECT title FROM projects WHERE done='1' UNION SELECT title FROM habits WHERE done='1'"; 
		$done = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	default:
		echo "Something went wrong, data not retrieved.";
}

$conn->close();
?>