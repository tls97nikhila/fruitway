<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "market";
	$email=$_POST["email"];
	$fruit_name=$_POST["fruit_name"];
	$data=array();
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// sql to delete a record
	$sql = "DELETE FROM fruit_vendors WHERE s_email='$email' and fruit='$fruit_name'";

	if ($conn->query($sql) === TRUE) {
	    //echo "Record deleted successfully";
	} else {
	    //echo "Error deleting record: " . $conn->error;
	}
	$sql = "SELECT * FROM fruit_vendors where s_email='$email'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        array_push($data,array('fname'=>$row["fruit"],'quantity'=>$row["quantity"],'price'=>$row["cost"]));
		    }
		} else {
		    
		    array_push($data,0);
		}
	$conn->close();
	echo json_encode($data);
?>