<?php
//INSERT VALUES INTO THE DATABASE
include ('db.php');

// GET INFO ON INSERT VALUE AND WHCIH TABLE/SECTION
//$data = $_POST[];
$data_value = $_POST["goal"];

echo $data_value;

/* switch($data){
	case "goal":
		$sql = "INSERT INTO 'goals' ('g_title') VALUES ('$goals')"; // Get access to goal VueJS value here, value plus section needed
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
	default:
		echo "Something went wrong, data not retrieved.";
} */
// 
$conn->close();
// INSERT INTO `projects` (`p_id`, `p_title`, `p_desc`, `p_time`) VALUES (NULL, 'Family Recipe', 'Mobile/Online, React/Vue', '21 days');
?>