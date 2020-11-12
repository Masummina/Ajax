

<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>

</head>
<body>

<?php 

	include ('include/Project.php');
	$dbconn = new Project();

?>

<div class="main" style="width: 800px; margin: 0 auto; background: #ddd; border: 4px solid #333; min-height: 600px;">

	<div class="bg" style="padding: 10px; background: red; margin-bottom: 20px;"><h2 style="color: #fff; text-align: center;">Ajax Tutorial</h2> 
	</div>
	<form method="POST" action="">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="username" name="username" id="usernames"></td>
				</tr>
			</table>
		</form>
		<div id="showdata">
  
		</div>
	
</div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	 <script src="lib/custom.js"></script>
</body>
</html>

