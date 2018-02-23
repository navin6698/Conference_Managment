<?php
$connection = mysqli_connect("localhost", "root", "root","conf"); // Establishing Connection with Server
$db = mysqli_select_db($connection,"conf"); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$auth_name = $_POST['auth_name'];
$title = $_POST['title'];
$cnf= $_POST['cnf'];
$date = $_POST['date'];
?>
<html>    <head> 
		
<title>CMS</title>
</head>

	<body><div style=" padding:20px; text-align:center; border: 10px solid #787878">
<div style=" height:550px; padding:15px; text-align:center; border: 5px solid #787878">
		<img src="2.jpeg" <div style="max-width: 25%;" ><br/><br/>
       <span style="font-size:50px; font-weight:bold">Certificate of appreciation</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that author named</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php echo "$auth_name";  ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has presented paper titled<br/><?php echo "$title";  ?></i></span> <br/><br/>
	   <span style="font-size:25px"><i>in conference</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo "$cnf";  ?></span> <br/><br/>
       <span style="font-size:25px"><i>which was held on <?php echo "$date";  ?></i></span><br>
	   </div>
	   </div>
   
</body>
</html>
<?php }
  ?>