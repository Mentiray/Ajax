<?php

	//	$dbhost = "121.12.92.76";
	//	$dbuser = "db7061500";
	//	$dbpwd  = "S4j8b6n2";
	//	$dbname = "db7061500";
	
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpwd  = "root";
		$dbname = "myweb";
	
		$link = new mysqli($dbhost,$dbuser,$dbpwd,$dbname);
		if($link->connect_error){
			die("Could not connect:".$link->connect_error);
		}
//		else{
//			echo "success";
//		}
?>