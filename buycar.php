<?php
	date_default_timezone_set('Asia/Kolkata');
	$name=$_POST["name"];
    $email=$_POST["email"];
	$car=$_POST["car"];
	$date=$_POST["date"];
	include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
    $test2=mysql_query("INSERT INTO `cardetails`(`name`, `email`, `car`, `date`) VALUES ('$name','$email','$car','$date')");
	if(! $test2 )
		{
		
			die('Could not update data: ' . mysql_error());
			
		}
    echo "<br />";
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
  <center><strong>Congrats!<?php
  echo "$name"?><br></strong> Your <?php
  echo "$car"?> was Successfully Booked.</br><br><br>
  <a href="buy.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
</div>
</body>
</head>
</html>
<?php	
    $connection->closeConnection();



?>
