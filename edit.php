
<?php
	//session_start();
	if(isset($_COOKIE['username'])||isset($_COOKIE["password"])){
?>

<html>
<head>
	<title>change password</title>
</head>
<body>
<form method="POST" >
<center>
<table border="1" >
	<tr>
		
		<td align="right"><a href="home.php">Home</a> | <a href="logout.php">Logout</a> </td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
			<fieldset>
				<legend><h3>Change password</h3></legend>
				
					<table border="0" width="80%">
						
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td>
								<p>Name</p>
							</td>
							<td align="right">
								:<input type="text" name="uname" value="<?=$_COOKIE['username']?>">
							</td>
						</tr>
					
						
						
						
						<tr>
							<td>
								Changing Password
							</td>
							<td align="right">
								:<input type="password" name="pass">
							</td>
						</tr>
						
						
						
						<!--<tr>
							<td colspan="2">
								<fieldset>
									<legend><h4>GENDER</h4></legend>
									<input type="checkbox" name="gender">Male<input type="checkbox" name="gender">Female<input type="checkbox" name="gender">Other
								</fieldset>
							</td>
						</tr>-->
					
							<td colspan="2"><input type="Submit" name="submit" value="UPDATE"> <input type="reset" name="reet"></td>
						</tr>
					</table>
			
			</fieldset>
		</td>
	</tr>

</table>
</center>
	</form>
	<?php
	
	include("db.php");

	//session_start();
	if(isset($_COOKIE['username'])){
		$u=$_COOKIE['username'];
		
		$password=$_POST['pass'];
		
		$query="UPDATE users SET password='$password' WHERE username='$u'";
	$conn = getConnection();	
	$data=mysqli_query($conn,$query);
	if($data){
		echo"record update seccessfuly.";
		
		
	}
	else{
		
		echo"record don't update";
		
	}
	}
	else{
		
		echo"something wrong";
		
	}
	
	?>
</body>
</html>
<?php		
	}else{
		header('location: edit.php');
	}

?>


