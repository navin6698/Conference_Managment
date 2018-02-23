<!DOCTYPE html>
<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){
if(isset($_POST['radio'])){
$auth_id= $_POST['auth_id'];
$paper_id= $_POST['paper_id'];
$comments= $_POST['comments'];
$q1 = mysqli_query($connection,"UPDATE paper_p SET status='".$_POST['radio']."'  WHERE auth_id=$auth_id AND pid=$paper_id");
$q2 = mysqli_query($connection,"UPDATE paper_p SET comments='".$_POST['comments']."'  WHERE auth_id=$auth_id AND pid=$paper_id");
if($q1!=0 and $q2!=0){
	header("location:rev_home.php?ms=Networks");
	echo "Yes";
}
else
	header("location:rev_home.php?ms=Networks");
	echo "No";
}
else
{?>
	<h2><center>error not selected<center><h2>
	<a href="rev_home.php">
		<input name="b1" type="button" class="btn btn-primary" value="Home" ></a><br><br><br>

	<?php
}
}
?>
