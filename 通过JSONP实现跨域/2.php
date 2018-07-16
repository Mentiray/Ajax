<?php 
	//获取回调函数名
	$callback = htmlspecialchars($_REQUEST ['callback']);
	$atrr1 = array("name"=>"Jack","age"=>22);
	$atrr2 = array("name"=>"Bill","age"=>23);
	$atrr3 = array($atrr1,$atrr2);
	$atrr = array('person' => $atrr3 );
	//输出jsonp格式的数据
	echo $callback . "(" . json_encode($atrr) . ")";
 ?>