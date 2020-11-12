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
	$sql = "SELECT * FROM `all_students` WHERE name LIKE '%$classname%'";
	$result = $conn->query($sql);
	$num_col = $result->num_rows;
    if($num_col > 0){
         echo "<div class='student_list'> <ul>";
        while($rowsValue = $result->fetch_assoc()){
           
               echo "<li>".$rowsValue['name']."</li>";
        }
        echo "</ul></div>";
    }else{
        echo "No data found";
    }
}

 ?>