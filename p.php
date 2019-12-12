<?php
include("db.php");

	//session_start();
	if(isset($_COOKIE['username'])){
		$u=$_COOKIE['username'];

$query="SELECT * FROM users WHERE username='$u' ";
$conn = getConnection();
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="logout.php">logout</a>

	<br>
	<br>
	
	

	<table border="1" >
		<tr >
		     <th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Password</th>
			<th>Type</th> 
		</tr>
		
		
		
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
		     <td>".$result['id']."</td>
			<td> ".$result['username']."</td>
			<td>".$result['email']."</td>
			<td>".$result['password']."</td>
			
			<td>".$result['type']."</td>
			
			
			";
				
		}
				?>
				
			
		</tr>
		
	
	</table>
	
	
	
</body>
</html>
<?php		
	}else{
		header('location: home.php');
	}

?>