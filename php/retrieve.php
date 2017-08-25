<?php
//READ FROM THE DATABASE
include ('db.php');

switch($data){
	case "goal":
		$sql = "SELECT g_title FROM goals";
		$goals = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "project":
		$sql = "SELECT p_title FROM projects";
		$projects = $conn->query($sql) or trigger_error($conn->error. " [$sql]");	
		break;
	case "habit":
		$sql = "SELECT h_title FROM habits";
		$habits = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "fear":
		$sql = "SELECT f_title FROM fears";
		$fears = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "active":
		$sql = "SELECT f_title FROM fears";
		$active = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "done":
		$sql = "SELECT f_title FROM fears";
		$done = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	default:
		echo "Something went wrong, data not retrieved.";
}

$conn->close();
?>