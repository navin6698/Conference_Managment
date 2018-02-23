<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){
$auth_id= $_POST['auth_id'];
$paper_id= $_POST['paper_id'];
$comments=$_POST['comments'];
$radio=$_POST['radio'];
$query = mysqli_query($connection,"insert into status (auth_id,paper_id,comments,radio) values ('$auth_id','$paper_id', '$comments', '$radio')");
$q1 = mysqli_query($connection,"UPDATE paper_p SET status='$radio' WHERE auth_id=$auth_id AND pid=$paper_id");
if($q1!=0 && $query!=0){
	echo "ok";
}
else
	echo "not";
}
else
	echo "problem";?>