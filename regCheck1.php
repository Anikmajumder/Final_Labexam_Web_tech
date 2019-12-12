
		
		<?php
	
	require_once('functions1.php');
	if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])&& isset($_POST["type"])){
			
		$uname = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	 $type=$_POST['type'];
	

			 $status = register($uname,$password, $email,$type);
			if($status){
				header('location:adduser.php?msg=success');
			}else{
				header('location:adduser.php?msg=dberror');
			}
		}
	else{
		header('location:adduser.php');
	}
?>

	


