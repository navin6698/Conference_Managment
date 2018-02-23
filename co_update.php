<!DOCTYPE html>
<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
If(isset($_POST['submit'])){
$auth_id= $_POST['auth_id'];
$pid= $_POST['paper_id'];
$date= $_POST['cnf_date'];
$title=$_POST['title'];
$domain=$_POST['domain'];
$query = mysqli_query($connection,"insert into confer(auth_id,pid,title,domain,cnf_date) values ('$auth_id','$pid', '$title', '$domain','$date')");
$upd=mysqli_query($connection,"update paper_p set conf=1 where pid='$pid'");
If($query!=0){
	?>
	<script type="text/javascript">
	window.alert("succesfully updated");
	</script>
	
	<?php
		header("Location:pap_accepted.php?msg=Successfully updated");
	?>
	<?php
}
else
{
	?>
	<script type="text/javascript">
	window.alert("not updated");
	</script>
	<?php
	header("Location:pap_accepted.php?err=not updated");
	?>
	<?php
}
}
?>
