<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="test/";

$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	if(move_uploaded_file($file_loc,$folder.$final_file) )
	{

			$sql="INSERT INTO test(fname,lname,file,type,size,) values('$fname','$lname','$final_file','$file_type','$new_size')";
			$result=mysqli_query($connection,$sql);

if($result!=0){
	echo "Yes";
}
else
{
	echo "NO";echo '  ';
	echo "$fname";echo '  ';
	echo "$lname";echo '  ';
	echo "$final_file";echo '  ';
	echo "$file_type";echo '  ';
	echo "$new_size";echo '  ';
}
}
else
{
	echo "wrong";
}
}

mysqli_close($connection);

?> 