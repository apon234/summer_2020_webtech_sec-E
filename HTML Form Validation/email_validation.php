<?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      	$email = $_POST["smail"];
      	if ($email == "") {echo "Can not be empty !";}
      }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Validation</title>
</head>
<body>

       <form method="post">
       	
       	     Email:<br><input type="Email" name="smail" value=""><br>
       	     <input type="submit" name="" value="Submit">


       </form>


</body>
</html>