
<?php
$err="";
?>

<?php
$auth_id="";
$auth_id = $_GET['auth_id'];

if($auth_id==NULL)
{
	header("Location:aut_login.php");
}
?>

<!DOCTYPE html>
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
				<h3> PAPER SUBMIT FORM </h3>
			

		<form action="paper.php" method="POST" enctype="multipart/form-data">
			
			
			<div class="form-group">
			<label for="auth_id" class="cols-sm-2 control-label" > Author ID </label>
			<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
			
			<input type="text" name="auth_id" class="form-control" id="auth_id"  value="<?php  echo "$auth_id";?>" readonly>
</div></div></div>


		<div class="form-group" class="cols-sm-2 control-label">
		<label for="pid" class="cols-sm-2 control-label"> Paper ID </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-newspaper-o fa" aria-hidden="true"></i></span>
						
		<input type="text" id="pid" class="form-control" name="pid" placeholder="Enter the paper id"
			pattern="[0-9]{4,}" title ="Please enter minimum 4 characters and only in digits" autofocus required>
			
			<?php
												
							if (isset($_GET['err']) && $_GET['err'] == "Paper ID already exists")
							{?>
								<h5 style="color: red;"> Paper ID already exists </h5>
					<?php
							}
					?>
</div></div></div>
 
		
		<div class="form-group" class="cols-sm-2 control-label">
		<label for="title" class="cols-sm-2 control-label" > Title </label>
		<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></span>
		<input type="text"  id="title" class="form-control" name="title" placeholder="Enter the paper title"
			pattern="[a-zA-Z ]{4,}" title ="Please enter minimum of 4 charcters"required>
</div></div></div>			


<div class="form-group" class="cols-sm-2 control-label">
	<label for="domain" class="cols-sm-2 control-label"> Domain </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-bookmark fa-lg" aria-hidden="true"></i></span>


	
<select id="domain" name="domain" class="form-control">                      
<option value="Networks">Networks</option>
<option value="Cloud Computing">Cloud Computing</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="Others">Others</option>
</select>
</div></div></div>

		
	
<div class="form-group" class="cols-sm-2 control-label">		
	<label for="sub_date" class="cols-sm-2 control-label"> Submission Date </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
	<input type="date"  id="sub_date" class="form-control" name="sub_date" placeholder="Enter the submission date" required readonly><br>
		</div></div></div>
			<script>			
			document.getElementById('sub_date').value = new Date().toISOString().substring(0, 10);
			</script>

			

<div class="form-group" class="cols-sm-2 control-label">		
	<label for="file" class="cols-sm-2 control-label"> Document </label>
	<div class="cols-sm-10">
				<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-file fa" aria-hidden="true"></i></span>

	<input type="file" name="file" class="form-control">
	</div></div></div>
	<br>
	<div class="form-group  ">
	<input type="submit" name="submit" value="Submit the papers" class="btn btn-primary btn-lg btn-block login-button"><br>
	</div>
	
		</form>
	</div>
	<div class="form-group ">
						<center><a href="auth_main.php?auth_id=<?php echo "$auth_id";?>" type="button" id="button" class="btn  btn-sm ">Home</a></center>	
						</div>

	</div>	</div>		
	
	<?php
$msg="";
//$msg = $_GET['msg'];
//if($msg!='')
if (isset($_GET['msg']) && $_GET['msg'] == "Successfully updated")
{?>
	<script type="text/javascript">
	window.alert("succesfully updated");
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