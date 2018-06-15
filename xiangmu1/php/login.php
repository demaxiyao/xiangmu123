<?php  
	require "conn.php";
	if(isset($_POST['pic'])){
		$username=$_POST['phone'];
		$password=md5($_POST['password']);
	}else{
		exit('非法操作');
	}


	$result=mysql_query("select * from pic where username='$username' and password='$password' ");
	if(mysql_fetch_array($result)){//有值，登陆通过
		echo true;
	}else{
		echo false;
	}

?>