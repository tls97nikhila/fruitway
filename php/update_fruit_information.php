<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "market";
	$data=array();

	$email=$_POST["email"];
	$fruit_name=$_POST["fruit_name"];
	$quantity=(int)$_POST["quantity"];
	$price=(int)$_POST["price"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE fruit_vendors SET quantity=$quantity,cost=$price WHERE s_email='$email' and fruit='$fruit_name'";

	if ($conn->query($sql) === TRUE) {
	    //echo "Record updated successfully";
	} else {
	    //echo "Error updating record: " . $conn->error;
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