<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server

$res=mysqli_query($connection,"select * from paper_p WHERE status='accept' and conf=0");
?>

<!DOCTYPE html>
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
		<link rel="stylesheet" href="table1.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <title>CMS</title>
</head>

<body>
<center><h1> ACCEPTED PAPERS </h1> </center>
<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
<table border="1">
<th>Author_ID</th><th>Paper_ID</th><th>Title</th><th>Domain</th> <th>File</th>  <th>Date</th> <th>Update</th> 


<?php
If(mysqli_num_rows($res)> 0){

	while($row=mysqli_fetch_array($res,MYSQL_NUM)){?>
		<tr>
		<form action="co_update.php" method="POST">
		<td><input type="text" id="auth_id" name="auth_id" 
			 value="<?php echo $row[0];?>" readonly></td>
		<td><input type="text" id="paper_id" name="paper_id" 
			 value="<?php echo $row[1];?>" readonly></td>
		<td><input type="text" id="title" name="title"
			 value="<?php echo $row[2];?>" readonly></td>
		<td><input type="text" id="paper_id" name="domain" 
			 value="<?php echo $row[3];?>" readonly></td>
		<td><a href="test/<?php echo $row[5] ?>" target="_blank">view file</a></td>
		<td><input type="date" id="cnf_date" name="cnf_date" placeholder="Enter the conference date" required>
<br><br></td>
			 
	<td><input type="submit" name="submit"  value="Update"></td>
	</form>
</tr>

		
<?php
	}
}?>	
</table>
<br><br>
	<div class="form-group ">
						<center><a href="co_home.php" type="button" id="button" class="btn  btn-primary btn-sm ">Home</a></center>	
						</div>
	</div></div></div>
</body>
</html>

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
					<?php
												
							if (isset($_GET['err']) && $_GET['err'] == "not updated")
							{?>
							<script type="text/javascript">
	window.alert("not updated");
	</script>	
					<?php
							}
					?>

	