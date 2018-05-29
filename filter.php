<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
              
                $carname=$_POST['carname'];
				$startrange=$_POST["startrange"];
				$endrange=$_POST["endrange"];
			
				$result=mysql_query("SELECT * FROM pricedetails WHERE price BETWEEN '$startrange' AND '$endrange'");
				while($row=mysql_fetch_array($result))
				{
					$price=$row["price"];
					//$code=$row["code"];
					//$name=$row["firstname"];
				}
              
               		if($price > $startrange || $price < $endrange)
					{	
						if($price > 100000 || $price < 100000)
						{
						session_start();
						$_SESSION['sid']=session_id();
						header( 'Location: http://localhost/Backup/filter.html?logid='.$name.'') ;
						}
						
						else 
							echo "You have no permission";
						
					}
				else	
				echo "<center><a href=index.html>Login UnSuccessful</a></center>";
			
	ob_end_flush();
    $connection->closeConnection();
?>