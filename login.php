<?php 
	include 'sqlcon.php';
	$type = 0;
	$username = $_POST['username'];
	$userpwd  = $_POST['userpwd'];	
	$sql = "select username,userpwd from login where username = '{$username}' and userpwd = '{$userpwd}' "; 
   $sql2 = "select username,userpwd from login where username = '{$username}' and userpwd != '{$userpwd}' "; 
	$result = $link->query($sql);
	$result2 = $link->query($sql2);
	if($result->num_rows > 0){
		$type = 1;
	}
	if($result2->num_rows > 0){
		$type = 2;
	}
	$response = array(
		'type' => $type
	);
	echo json_encode($response);
	
 ?>