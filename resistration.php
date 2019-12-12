

<html>
<head>
	<title>Resistration</title>
</head>
<body>

<center>
<table border="1">
	<tr>
		

	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
			<fieldset>
				<legend><h3>Resistration</h3></legend>
				<form method="POST" action="regCheck1.php" id="myForm" name="myForm">
					<table border="0" width="80%">
						<tr>
							<td>
								<p>Name</p>
							</td>
							<td align="right">
								:<input type="text" id='name' name='name'>
							</td>
						</tr>
						
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td align="right">
								:<input type="email"  id='email' name='email'>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td>
								Password
							</td>
							<td align="right">
								:<input type="password"  id='password' name='password'>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						
						
						<!--<tr>
							<td colspan="2">
								<fieldset>
									<legend><h4>GENDER</h4></legend>
									<input type="checkbox" name="gender">Male<input type="checkbox" name="gender">Female<input type="checkbox" name="gender">Other
								</fieldset>
							</td>
						</tr>-->
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td colspan="2">
								<select id="type" name="type">
  <option value="user">user</option>
  <option value="emloyee">employee</option>
</select>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td colspan="2"><input  onclick="validateForm()" type='button' value='Submit'> <input type="reset" name="reet"></td>
						<a href="login.html">login</a>
						</tr>
						
						
						<script>
			
			function validateForm(){

	var name,email,password,type;

	name = document.getElementById("name").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	//gender = document.getElementById("gender").value;
    type=document.getElementById("type").value;
    //month = document.getElementById("month").value;
    //year = document.getElementById("year").value;

    if (name == '' || password == '' || email == ''||  type == '') {
        alert("Fill all fields!!");
    }else{
        var arr = name.split('');
        if(name.indexOf(' ') === -1 || !isLetter(arr[0])){
            alert("Please provide valid information!!");
        }else{
           document.getElementById("myForm").submit();
        }
    }


}
function isLetter(c) {
    return c.toLowerCase() != c.toUpperCase();
  }
			
			
			</script>
			
			
			
					</table>
			
			</fieldset>
			
		</td>
	</tr>
	
	
	
	
</table>
</center>
	</form>
</body>
</html>


