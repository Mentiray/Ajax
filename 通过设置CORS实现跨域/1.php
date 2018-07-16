<?php 
	header('Access-Control-Allow-Origin:*'); 
	$atrr1 = array("name"=>"Jack","age"=>22);
	$atrr2 = array("name"=>"Bill","age"=>23);
	$atrr3 = array($atrr1,$atrr2);
	$atrr = array('person' => $atrr3 );
	echo json_encode($atrr);
 ?>