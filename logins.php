<?php
error_reporting(0);
ini_set("display_errors", "1");
error_reporting(E_ALL);
include ('connection.php');
    $connection = new createConnection();
    $connection->connectToDatabase(); 
    $connection->selectDatabase();
              
                $logid=$_POST['username'];
				$pswd=$_POST['password'];
				
				$result=mysql_query("select * from custdetails where email='$logid'");
$num=mysql_num_rows($result);
				if($num=0) 
				{
				die("Enter valid Username");
				}
				else
				{
				while($row=mysql_fetch_array($result))
				{
					$password=$row["password"];
					$code=$row["code"];
					$name=$row["name"];
				}
				}
                  if( $pswd==$password)
					{	
						if($code='1')
						{
						session_start();
						$_SESSION['sid']=session_id();
						header( 'Location: http://localhost/Backup/buy.html?logid='.$name.'') ;
						}
						
						else 
							echo "You have no permission";
						
					}
				else	
				echo "<center><a href=index.html>Login UnSuccessful</a></center>";
			
	ob_end_flush();
    $connection->closeConnection();
?>