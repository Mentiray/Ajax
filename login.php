<?php 
	include 'sqlcon.php';
	$type = 0;
	$username = $_POST['username'];
	$userpwd  = $_POST['userpwd'];	
	$sql = "select username,userpwd from login where username = '{$username}' and userpwd = '{$userpwd}' " ; 
	$sql2 = "select username,userpwd from login where username = '{$username}' and userpwd != '{$userpwd}' " ; 
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
	
	
//	if($result->num_rows >0){
//		while($row = $result->fetch_assoc()){
//			echo "账号：".$row["username"]."密码：".$row["userpwd"];
//		}
//	}
	
	
	
	$link->close();

	
	
//	$userName = $_POST['username'];
//	$userPwd = $_POST['userpwd'];
//	$usermsg = array(
//		'abc123' => '123456',
//		'qweasd' => '123456',
//		
//	);
//	$type = 0;
//	foreach ($usermsg as $key => $value) {
//		if ($userName == $key and $userPwd ==$value) {
//			$type = 1;
//			break;
//		}else if($userName = $key and $userPwd != $value){
//			$type = 2;
//			break;
//		}
//	}
//
//	$response = array(
//		'type' => $type
//	);
//
//	echo json_encode($response);
	
 ?>