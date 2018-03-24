<?php
	include 'sqlcon.php';
	$reginame = $_POST['reginame'];
	$regipwd  = $_POST['regipwd'];
	$type = 0;
	$sql = "select username from login where username = '{$reginame}'";
	$sql2 = "insert into login(username,userpwd) values('{$reginame}','{$regipwd}')";
	$result = $link->query($sql);
	if($result->num_rows == 0){
		if($link->query($sql2)===true){
			$link->query($sql2);
			$type=1;
		}else{
			echo $link->error;
		}	
	} 
	$response = array(
		"type" => $type
	);
	echo json_encode($response);
	
?>