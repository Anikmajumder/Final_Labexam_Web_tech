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
	<br> <h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	
		
		<tr align="right"><a href="home.html">Home</a> <br>
		<a href="logout.php">logout</a> <br>
		<a href="p.php">Profile</a><br>
		<a href="display.php">View user</a> <br>
	    <a href="edit.php">Edit profile</a>  <br>
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
