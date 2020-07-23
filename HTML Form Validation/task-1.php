<?php

//print_r($_POST);
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$name = $_POST['sname'];
		if($name == ""){ echo "Can not be empty.";}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Name Validation </title>

</head>
<body>

         <form method="post">
         	    Name<br>
         	    <input type="text" name="sname" value=""><br>
         	    <input type="submit" name="" value="Submit">

         </form>




</body>
</html>