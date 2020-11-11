<!DOCTYPE html>
<html>
<head>
  <title>Ajax</title>

</head>
<body>
  <?php 
  include('lib/Database.php');
  $db = new Database();

  ?>

<form action="" method="POST">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="username" id="username"></td>
      </tr>
    </table>
   <select name="person" id="person">
      <option value="">Select a person:</option>
      <option value="Griffin">Peter Griffin</option>
      <option value="Griffin">Lois Griffin</option>
      <option value="Swanson">Joseph Swanson</option>
      <option value="Quagmire">Glenn Quagmire</option>
    </select>
    <input type="submit" name="submit" id="submit">

</form>


<div id="showdata">
  
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="lib/custom.js"></script>
</body>


</html>
