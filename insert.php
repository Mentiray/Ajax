<?php
	include "sqlcon.php";
	$insertName = $_POST['insertName']; 
	$insertAge = $_POST['insertAge']; 
 
	$sql="insert into information (bossname,bossage) values ('{$insertName}','{$insertAge}')";

	$type = 0;
	if($link->query($sql)===true){
		$type = 1;
	}
	$response =array(
		'type' => $type
	);
	echo json_encode($response);
?>