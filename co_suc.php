<html>
<body>

<p> Successfully Updated </p>
<br><br>
<?php	
	
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf");

$auth_id = $_GET['auth_id'];
?>

<a align="center" href="certificate.php?auth_id=<?php echo "$auth_id";?>"> Generate certificate</a>




</body>
</html>