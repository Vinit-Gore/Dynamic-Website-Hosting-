<?php
	date_default_timezone_set('Asia/Kolkata');
	$username=$_POST["username"];
	$email=$_POST["email"];
    $mobile=$_POST["mobile"];
	$password=$_POST["password"];
	include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
    $test2=mysql_query("INSERT INTO `custdetails`(`name`, `email`, `mobile`, `password`) VALUES ('$username','$email','$mobile','$password')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysql_error());
			
		}
    echo "<br />";
	$result=mysql_query("select * from custdetails");
				while($row=mysql_fetch_array($result))
				{
					$code=$row['code'];
				}	
	?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Buying System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Congratulations!<?php
  echo "$username";?><br></strong> Your details are <br><?php
  echo "Username: "; echo "$email"; 
  echo "<br>";
  echo "Password: "; echo "$password";echo "<br>";
?>
  <a href="login.html" class="btn btn-success page-scroll">Click here to login</a></center>
</div>
</body>

</html>
	<?php
	//echo "<a href=index.php  ><h1>Click Here Go to login page</h1></a>";
    $connection->closeConnection();



?>
