<?php 
date_default_timezone_set('Asia/Kolkata');
		include ('connection.php');
   		 $connection = new createConnection();
   	 	$connection->connectToDatabase(); 
    		$connection->selectDatabase();


$userid = $_POST['user id'];
$password = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmpassword'];

$result = mysql_query("SELECT password FROM custdetails WHERE email='$userid'");
echo gettype($result);
if(!$result) 
{ 
echo "The userid you entered does not exist"; 
} 
else if($pwd!=  mysql_fetch_assoc($result, 0)) 
{ 
echo "You entered an incorrect password. <a href=changepw.html>Try Again</a> or <a href=index.html>Quit</a>"; 
} 
if($newpassword=$confirmnewpassword) 
    $sql=mysql_query("UPDATE custdetails SET password='$newpassword' where email='$userid'"); 
    if($sql) 
    { 
    echo "Congratulations! You have successfully changed your password. <a href=index.htm>Continue</a>"; 
    }
else
{ 
echo "The new password and confirm new password fields must be the same. <a href=changepw.htm>Try Again</a> or <a href=index.htm>Quit</a>"; 
}  
?>