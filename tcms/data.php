<?php
	$baseurl="http://www.zhangxiaode.com/itaobao/root";
	$jsonfile="../rcms/json/index.json";
	$jsonString=file_get_contents($jsonfile);
	$data=json_decode($jsonString,true);
?>
