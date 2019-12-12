<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 't');
		return $conn;
	}
?>