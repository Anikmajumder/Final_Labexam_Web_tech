<?php
	//session_start();
	if(isset($_COOKIE['username'])){
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
<center>
<table border="1"  >

	<tr>
	<br> <h1>Employee PANEL</h1> 
	<br> <h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	
		
		
		<a href="logout.php">logout</a> <br>
		<a href="edit.php">Change Profile</a><br>
		<a href="p.php"> Profile</a><br>
		
	</tr>
	</tr>
	
	
	
</center>
</body>
</table>
</html>
<?php		
	}else{
		header('location: login.php');
	}

?>
