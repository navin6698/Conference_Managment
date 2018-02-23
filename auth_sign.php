<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$auth_id = $_POST['auth_id'];
$auth_name = $_POST['auth_name'];
$auth_city = $_POST['auth_city'];
$password = $_POST['password'];
$auth_email = $_POST['auth_email'];
$phno = $_POST['phno'];
$query = mysqli_query($connection,"insert into author(auth_id,auth_name,auth_city,password,auth_email,phno) values ('$auth_id','$auth_name', '$auth_city', '$password','$auth_email','$phno')");
if($query==1){
	
	?>
	<script type="text/javascript">
	window.alert("succesfully updated");
	</script>
	
	<?php
		header("Location:author_signup.php?msg=Successfully registered");
	?>
	<?php
}
else{
	
	?>
	<script type="text/javascript">
	window.alert("not updated");
	</script>
	<?php
	header("Location:author_signup.php?err=Author ID already exists");
	?>
	<?php
	
}
}

mysqli_close($connection); // Closing Connection with Server
?>
<html>
<body>