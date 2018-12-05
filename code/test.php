<?php 
	header('content-type:text/html;charset = utf8');
	$link = mysql_connect('localhost','root','123456');
	if (!$link) {
		echo "连接失败";
		exit;
	}
	mysql_set_charset('utf8');
	mysql_select_db('AAAA');
	$type = $_GET['type'];
	if ($type == 'login') {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = 'select * from users where username="{$username}" AND password="{$password}"';
		$res  = mysql_query($sql);
		$row = mysql_fetch_assoc($res);
		if ($row) {
			echo "登陆成功";
			exit;
		}else{
			echo "登录失败";
			exit;
		}
	}else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		if ($password != $repassword) {
			echo "密码不一致";
			exit;
		}
		$sql = 'SELECT * FROM users WHERE username="{$username}"';
		$res = mysql_query($sql);
		$row = mysql_fetch_assoc($res);
		if ($row) {
			echo "已被注册";
			exit;
		}
		$sql = 'INSERT INTO users{username,password} VALUES("{$username}","{$password}")';
		$res = mysql_query($sql);
		if ($res) {
			echo "注册成功";
			exit;
		}else{
			echo "注册失败";
			exit;
		}
	}
	mysql_close($link);
 ?>