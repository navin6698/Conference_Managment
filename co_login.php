<html lang="en">
    <head> 
	<meta charset="utf-8">
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

		<h3> Coordinator LOGIN FORM </h3>
		
		<form action="" method="POST">
		<div class="form-group">
			<label for="aut_id" class="cols-sm-2 control-label">  Coordinator ID </label>
			<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
			<input type="text" id="co_id"  name="co_id" placeholder="Enter the coordinator id" class="form-control input-lg"
				pattern="[a-zA-z0-9]{4,}" title ="Please enter the correct author_id" autofocus required>
			</div></div></div>			
			
			<div class="form-group">
			<label for="password" class="cols-sm-2 control-label">  Password </label>
			<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
			<input type="password" id="password" name="password" placeholder="Enter the password" class="form-control input-lg"
				pattern="[a-zA-z0-9]{4,}" title ="Please enter your correct password" required>
				<div class="pwstrength_viewport_progress"></div>
			</div></div></div>
		
				<br>
				
			<div class="form-group ">
			<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Login">
			</div>
		</form>
		</div>
		<div class="form-group ">
						<center><a href="cnf.html" type="button" id="button" class="btn  btn-sm ">Home</a></center>	
						</div></div></div>			

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
			
			
<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
		die('Could not connect: ' . mysqli_error());
	}
$db=mysqli_select_db($conn,"conf");
if(!$db)
{
	die("No database");
}

if(isset($_POST['submit']))
{
$password=$_POST['password'];
$auth_id = $_POST['aut_id'];

$ret= mysqli_query($conn, "SELECT * FROM coordinator WHERE co_id='".$_POST['co_id']."' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
header("location:co_home.php");
exit();
}
else
{?>
<script type="text/javascript">
	window.alert("incorrect username or password");
	</script>
	<?php
exit();
}
}
?>			

