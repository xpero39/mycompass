<?php
//INSERT VALUES INTO THE DATABASE
include ('db.php');

//$data = $_POST[];
$data_value = $_POST["goal"];

echo $data_value;

/* switch($data){
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
	default:
		echo "Something went wrong, data not retrieved.";
} */
// 
$conn->close();
// INSERT INTO `projects` (`p_id`, `p_title`, `p_desc`, `p_time`) VALUES (NULL, 'Family Recipe', 'Mobile/Online, React/Vue', '21 days');
?>