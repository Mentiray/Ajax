<?php
	include 'sqlcon.php';

	
	$sql = "select * from information";
	
	$result = $link->query($sql);
	
	while($row = $result->fetch_assoc()){
		$arr['boss'][] = array(
			'bossname' => $row['bossname'],
			'bossage' => $row['bossage'],
		);
	}
	echo json_encode($arr);
	
	

//	while($row = $result->fetch_assoc()){
//		$bossname = $row["bossname"];
//		$bossage  = $row["bossage"];
//	}
//
//	$response = array(
//		'bossname' => $bossname,
//		'bossage'  => $bossage	
//	);

//	 while($row = $result->fetch_assoc()) {
//      echo $row["bossname"]. $row["bossage"];
//  }
    

//	while($row = $result->fetch_assoc()){	
//		$response = array(
////			array(
////				'bossname' => $row["bossname"],
////				'bossage'  => $row["bossage"]
////			)
//			'bossname' => $row["bossname"],
//			'bossage'  => $row["bossage"]
//		);	
//		
//		echo json_encode($response);
//
//	}
//	
//	$info = array(
//	 	array(
//	 	'no1'=>'bsd', 
//	 	'no2'=>'wuddy', 
//	 	'no3'=>'xie'
//	 	)
//	);
	

	

//  $response = $result ->fetch_all();




	
	
	
	
?>