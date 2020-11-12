<?php 
include('../lib/Database.php');
$pro = new Database();
$resliu = $pro->dbconnect();

if(isset($_POST['usernames'])){
	$usernames = $_POST['usernames'];
	$sql = "SELECT * FROM `teachers` WHERE name = '$usernames'";
	$link->query($sql);
	if($link->query($sql)){
		echo "uuuuuuuuuuu";
	}
}

 ?>