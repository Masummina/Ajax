<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schoolmanagement";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    

if(isset($_POST['person'])){
	$classname =  $_POST['person'];
	$sql = "SELECT * FROM `all_students` WHERE class_name = '$classname'";
	$result = $conn->query($sql);
	$num_col = $result->num_rows;
	echo "Admitted students is:".$num_col."<br>";
	while($rows = $result->fetch_assoc()){
		echo "Student Name is:".$rows['name']."<br>";
	}
}

 ?>