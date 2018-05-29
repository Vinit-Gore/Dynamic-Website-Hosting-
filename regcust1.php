<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Registered Customer</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="component">
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Password</th>
							<th>Unique Code</th>
						</tr>
					</thead>
					<tbody>
						<?php
session_start();
?>
<?php
date_default_timezone_set('Asia/Kolkata');
		include ('connection.php');
    		$connection = new createConnection();
    		$connection->connectToDatabase(); 
    		$connection->selectDatabase();
		
				
				
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
					</tbody>
				</table>
				
			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>