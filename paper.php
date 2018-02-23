<html>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); //replace myproject with your database name.
if(@$_POST['submit'])
{
	
$auth_id = $_POST['auth_id'];
$pid= $_POST['pid'];
$title= $_POST['title'];
$domain= $_POST['domain'];
$sub_date= $_POST['sub_date'];
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

//if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'test/'.$file_name))//"images" is just a folder name here we will load the file.
	
	{
		$query="INSERT INTO paper_p (auth_id,pid,title,domain,sub_date,file)VALUES('$auth_id', '$pid', '$title', '$domain','$sub_date','$file_name')";
		//$result=mysqli_query($connection,$sql);
		$result=mysqli_query($connection,$query);
		if($result!=0){
			?>
			
		<?php
		header("Location:paper_info.php?auth_id=$auth_id&msg=Successfully updated");
		exit;}
		else{
			?>
			
		<?php
		//echo "$auth_id";echo "$pid";echo "$title";echo "$domain";echo "$sub_date";echo "$final_file";echo "$file_type";echo "$new_size";echo "$status";echo "$comments";
		header("Location:paper_info.php?auth_id=$auth_id&err=Paper ID already exists");
		exit;}
		
	}
	else
	{?>
		<script type="text/javascript">
	window.alert("problem in uploading file");
	</script>
	<?php
	}	
}
mysqli_close($connection);
?> 
</body>
</html>
