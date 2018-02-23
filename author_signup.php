<!DOCTYPE html>

<?php
$err="";
?>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
				
				<center><h3> AUTHOR SIGNUP FORM </h3></center>
				
		<form action="auth_sign.php" method="POST">
		
			<div class="form-group">	
		<label for="auth_id" class="cols-sm-2 control-label"> Author ID </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-id-badge fa" aria-hidden="true"></i></span>
						
		<input type="text" id="auth_id" class="form-control" name="auth_id" placeholder="Enter author_id"
			pattern="[0-9]{4,}" title ="Please enter minimum 4 characters and only in digits" autofocus required>
					
					<?php
												
							if (isset($_GET['err']) && $_GET['err'] == "Author ID already exists")
							{?>
								<h5 style="color: red;"> Author ID already exists </h5>
					<?php
							}
					?>
					</div>
							</div>
						</div>
	
			<div class="form-group">
		<label for="auth_name" class="cols-sm-2 control-label"> Author Name </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		<input type="text" class="form-control" id="auth_name" name="auth_name" placeholder="Enter author name"
			pattern="[a-z A-Z]{4,}" title ="Please enter more than 4 charcters"required>
			</div>
							</div>
						</div>


	


<div class="form-group">
	<label for="auth_city" class="cols-sm-2 control-label"> City </label>
		<div class="cols-sm-10">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
		<input type="text" class="form-control" id="auth_city" name="auth_city" placeholder="Enter the city"
			pattern="[a-zA-Z]{4,}" title ="Please enter more than 4 charcters"required>	
</div>
</div>
</div>
<div class="form-group">
		<label for="password" class="cols-sm-2 control-label">Password</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
	<input type="password" class="form-control" id="password" name="password" placeholder="Set your new password"
		pattern="[a-zA-Z0-9]{4,}" title ="Please enter minimum of 4 characters" required>
</div>
</div>
</div>

<div class="form-group">
	<label for="auth_email" class="cols-sm-2 control-label"> Email </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
		<input type="email" class="form-control" id="auth_email" name="auth_email" placeholder="Enter the email address"
			 title ="Please enter the correct email address"required>
</div></div></div>



<div class="form-group">
	<label for="phno" class="cols-sm-2 control-label"> Phone no </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
	<input type="tel" class="form-control" id="phno" name="phno" placeholder="Enter your phone no"
		  pattern="[0-9]{10,10}" title="Please enter exactly 10 numbers" required>
</div></div></div>
<br>
	<div class="form-group ">
		<input type="submit" value="Submit the form" name="submit" type="submit" class="btn btn-primary btn-lg btn-block login-button">
	</div>
	
			
	</form>
	</div>
	<div class="form-group ">
						<center><a href="auth_home.html" type="button" id="button" class="btn  btn-sm ">Go back</a></center>	
						</div>
	
</div></div>
<?php
$msg="";
//$msg = $_GET['msg'];
//if($msg!='')
if (isset($_GET['msg']) && $_GET['msg'] == "Successfully registered")
{?>
	<script type="text/javascript">
	window.alert("Succesfully Registered");
	</script>
<?php 
}

else if (isset($_GET['msg']) && $_GET['msg'] == "not updated")
{?>
	<script type="text/javascript">
	window.alert("Not Updated");
	</script>
<?php 
}

?>			

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>