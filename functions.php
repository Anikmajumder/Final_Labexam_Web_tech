<?php
	require_once('db.php');

	function validate($uname, $password){

		$conn = getConnection();
		
		$sql = "select * from users where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		//print_r($result );
		$user = mysqli_fetch_assoc($result);
		
if($user["type"]=="user"){
	
	header('Location: user.php');
}
else{
	if($user["type"]=="admin"){
	header('Location: home.php');
	}
	else{
		
		header('Location: employee.php');
	}
}
		/*if(mysqli_fetch_assoc($result)>0){
	
	while($row= mysqli_fetch_assoc($result))
	{	if($row["type"]=="user"){
		header('Location: user.php');
	}
	else
	{
		header('Location: employee.php');
	}

		
	}
	}
	else{
		header('Location:login.php');
	}*/
	
	return count($user);
	}


	function register($id,$uname,$password, $email,$dob){

		$conn = getConnection();
		$type="user";
		$sql = "insert into users values( '{$id}','{$uname}','{$password}', '{$email}','{$dob}','{$type}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

?>