<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <title>CMS</title>
</head>



<body>
<center><h1> Conference Management System </h1> </center>
<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<form>			
				<center><h3> AUTHOR HOME </h3></center>
				<br><br>
		<div class="form-group ">
	<center>

<?php
$auth_id="";
$auth_id = $_GET['auth_id'];

if($auth_id==NULL)
{
	header("Location:aut_login.php");
}
?>
	

<a align="center" href="paper_info.php?auth_id=<?php echo "$auth_id";?>"> 
	
		<input type="button" class="btn btn-primary btn-lg btn-block login-button" value="Submit the papers" ></a><br><br>
		
<a align="center" href="auth_feed.php?auth_id=<?php echo "$auth_id";?>">
		<input type="button" class="btn btn-primary btn-lg btn-block login-button" value="View Status" ></a>
		<br>
		</center>
		</div>
		</form>
		</div>
		
		<div class="form-group ">
						<center><a href="aut_login.php" type="button" id="button" class="btn btn-primary  login-button btn-md ">Logout</a></center>	
						</div>
</div></div>	
</body>
</html>