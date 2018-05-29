<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
              
                $uname=$_POST['username'];
				$email=$_POST['password'];
				// sql to delete a record
					$sql = "DELETE FROM custdetails WHERE email='$uname'";
							if (mysql_query($sql)) 
							{
								

						
							}
							else 
							{
									echo "Error deleting record: ";
							}
ob_end_flush();
    $connection->closeConnection();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars Mart</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	
  </head>
  <body>
  <div class="alert alert-success">
  <center><strong>Thanks
  <br></strong> for registering with us <br>

  <a href="register.html" class="btn btn-success page-scroll">Click here to register</a></center><br>
  <center><a href="index.html" class="btn btn-success page-scroll">Go to Main Page</a></center>
</div>
</body>
</head>
</html>