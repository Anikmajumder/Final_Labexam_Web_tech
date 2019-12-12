

<?php
	
	if(isset($_GET['msg'])){
		
/*		if($_GET['msg'] == 'success'){

		}*/
		echo $_GET['msg'];
	}

?>

<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="POST" action="loginCheck.php">
<center>
<table border="1">
	<tr>
		<td align="left"><a>Login</a></td>
	
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
				<fieldset style="width:200;">
					<legend><h3>LOGIN</h3></legend>
					<form method="POST" action="">
						<table border="0">
							<tr>
								<td>
									Username: <input type="text" name="uname"><br><br>
									Password: <input type="password" name="pass">
								</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="Submit">
								</td>
							</tr>
						</table>
					</form>
				</fieldset><br>
		</td>
	</tr>

	</tr>
</table>
</center>
</form>
</body>
</html>

