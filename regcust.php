<?php
session_start();
?>
<?php
date_default_timezone_set('Asia/Kolkata');
		include ('connection.php');
    		$connection = new createConnection();
    		$connection->connectToDatabase(); 
    		$connection->selectDatabase();
		
				echo "<table  border=1 cellpadding=5 cellspacing=5 >";
				echo "<tr><td>Name</td><td>Email Id</td><td>Mobile</td>
				<td>Passowrd</td><td>Unique Code</td>";
				//$tlresult2=mysql_query("SELECT name1.ename,ta.Empid,ta.Task_Assign,
				//ta.Time_Limit,ta.work_status,ta.Date FROM mdi name1, task_assign_to_employee ta
				//WHERE name1.uid = ta.Empid AND ta.Tlid=$loginid ");
				
				$tlresult2=mysql_query("SELECT * from custdetails ");
				
				
				while($row=mysql_fetch_array($tlresult2))
				{
					$name=$row["name"];
				 	$email=$row["email"];
				 	$mobile=$row["mobile"];
					$password=$row["password"];
				 	$code=$row['code'];

					echo "<tr><td>".$name."</td><td>".$email."</td><td>".$mobile."</td>
							<td>".$password."</td><td>".$code."</td>";
				}
				echo "</table><br>";
				//if(!tlresult2)
				//{
				//echo "not found";
				//}
				
				
				
				
				
				// ta.Date=date(now())
						
					
					
//echo" <form  action=dataentry_task_assign_page.php?logid=$logid method=post>align=center class=dir_task_status";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Car Buying System</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative1.css" type="text/css">

    
	<!--<script type='text/javascript'>
	function validateForm() 
	{   
		var x = document.forms["condidatefrm"]["username"].value;
		if (x == null || x == "") 
		{
        alert("Please Enter your Name");
        return false;
		}
		var y = document.forms["condidatefrm"]["email"].value;
		if (y == null || y == "") 
		{
        alert("Please Enter your Email");
        return false;
		}
		var z = document.forms["condidatefrm"]["mobile"].value;
		if (z == null || z == "")
		{
		 alert("Please Enter your Mobile Number");
		 return false;
		}
	}
	</script>-->
</head>

<body id="page-top">

    