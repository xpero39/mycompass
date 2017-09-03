<?php
//INSERT VALUES INTO THE DATABASE
include ('db.php');

// GET INFO ON INSERT VALUE AND TABLE/SECTION
//$data = $_POST[]; //section data
$data_value = $_POST["goal"];
$data= $_POST[''];

echo $data_value;

 switch($data){
	case "goal":
		$sql = "INSERT INTO 'goals' ('g_title') VALUES ('$data_value')"; // Get access to goal VueJS value here, value plus section needed
		$goals = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "project":
		$sql = "INSERT INTO 'projects' ('p_title') VALUES ('$data_value')"; 
		$projects = $conn->query($sql) or trigger_error($conn->error. " [$sql]");	
		break;
	case "habit":
		$sql = "INSERT INTO 'habits' ('h_title') VALUES ('$data_value')"; 
		$habits = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	case "fear":
		$sql = "INSERT INTO 'fears' ('f_title') VALUES ('$data_value')"; 
		$fears = $conn->query($sql) or trigger_error($conn->error. " [$sql]");
		break;
	default:
		echo "Something went wrong, data not retrieved.";
} 

$conn->close();
?>