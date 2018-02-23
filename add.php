<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$rev_id = $_POST['rev_id'];
$rev_name = $_POST['rev_name'];
$rev_city = $_POST['rev_city'];
$password = $_POST['password'];
$rev_email = $_POST['rev_email'];
$phno = $_POST['phno'];
$domain = $_POST['domain'];
$query = mysqli_query($connection,"insert into reviewer(rev_id,rev_name,rev_city,password,rev_email,rev_phno,domain) values ('$rev_id','$rev_name', '$rev_city', '$password','$rev_email','$phno','$domain')");
if($query==1){
	
	?>
	<script type="text/javascript">
	window.alert("succesfully updated");
	</script>
	
	<?php
		header("Location:add_rev.php?msg=Successfully added");
	?>
	<?php
}
else{
	
	?>
	<script type="text/javascript">
	window.alert("not updated");
	</script>
	<?php
	header("Location:add_rev.php?err=Reviewer ID already exists");
	?>
	<?php
	
}
}

mysqli_close($connection); // Closing Connection with Server
?>
<html>
<body>