<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
$auth_id="";
$auth_id = $_GET['auth_id'];
if($auth_id==NULL)
{
	header("Location:aut_login.php");
}
$res=mysqli_query($connection,"select * from paper_p WHERE  auth_id='$auth_id' ");
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
<center><h1> VIEW STATUS </h1> </center>
<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				
<table border="1">

<th>Paper_ID</th><th>Title</th><th>Domain</th> <th>File</th><th>Submission date<th>Status</th><th>Comments</th>

<?php
If(mysqli_num_rows($res)> 0){

	while($row=mysqli_fetch_array($res,MYSQL_NUM)){?>
		<tr>
		
		
		<td><?php echo $row[1];?></td>
		<td><?php echo $row[2];?></td>
		<td><?php echo $row[3];?></td>
		<td><a href="test/<?php echo $row[5] ?>" target="_blank">view file</a></td>
		<td><?php echo $row[4];?></td>
		<td><?php echo $row[6];?></td>
		<td><?php echo $row[7];?></td>
	
</tr>
		
<?php
	}
}?>	

</table>
<br><br>
	<div class="form-group ">
						<center><a href="auth_main.php?auth_id=<?php echo "$auth_id";?>" type="button" id="button" class="btn  btn-primary btn-sm ">Home</a></center>	
						</div>
	</div></div></div>
</body>
</html>





