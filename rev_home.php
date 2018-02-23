<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
$dom=$_GET['ms'];
$res=mysqli_query($connection,"select * from paper_p WHERE status='pending' and domain='$dom'");
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
<center><h1> REVIEWER HOME </h1> </center>
<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
<table border="1">
<th>Author_ID</th><th>Paper_ID</th><th>Title</th><th>Domain</th> <th>File</th><th>Status</th> <th>comments</th><th>Feedback</th> 


<?php
If(mysqli_num_rows($res)> 0){

	while($row=mysqli_fetch_array($res,MYSQL_NUM)){?>
		<tr>
		<form action="update.php" method="POST">
		
		<td><input type="text" id="auth_id" name="auth_id" 
			 value="<?php echo $row[0];?>" readonly></td>
			 
		<td><input type="text" id="paper_id" name="paper_id" 
			 value="<?php echo $row[1];?>" readonly></td>
			 
		<td><?php echo $row[2];?></td>
		
		<td><?php echo $row[3];?></td>
		
		<td><a href="test/<?php echo $row[5] ?>" target="_blank">view file</a></td>
		
		<td>	<input type="radio" name="radio" value="accept" checked>accept
<input type="radio" name="radio" value="reject">reject</td>

<td><input type="text" id="comments" name="comments" placeholder="Enter comments"
 title ="Please enter comments" required></</td>
			 
	<td><input type="submit" name="submit"  value="Update"></td>
	</form>
</tr>
		
<?php
	}
}?>	

</table>
<br><br>
	<div class="form-group ">
						<center><a href="rev_login.php" type="button" id="button" class="btn  btn-primary btn-sm ">Logout</a></center>	
						</div>
	</div></div></div>
</body>
</html>


