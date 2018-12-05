<?php 
	header('content-type:text/html;charset = "utf-8"');
	error_reporting(0);
	$news = array(
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
		array('title'=>'阿冷好漂亮','data'=>'2018-9-20'),
	);
	echo json_encode($news);
 ?>