<?php
	mysql_connect('localhost','root','');	
	mysql_select_db('xiangmuyi');
	mysql_query('SET NAMES UTF8');
	//详情页的数据
	$fangdajingx=mysql_query("select * from fangdajingx");
	$fangdajingx_pic=array();
	for($i=0;$i<mysql_num_rows($fangdajingx);$i++){
		$fangdajingx_pic[$i]=mysql_fetch_array($fangdajingx,MYSQLI_ASSOC);
	}
	
	$fangdajingd=mysql_query("select * from fangdajingd");
	$fangdajingd_pic=array();
	for($i=0;$i<mysql_num_rows($fangdajingd);$i++){
		$fangdajingd_pic[$i]=mysql_fetch_array($fangdajingd,MYSQLI_ASSOC);
	}
	
	$xiaotu_xiang=mysql_query("select * from xiaotu_xiang");
	$xiaotu_xiang_pic=array();
	for($i;$i<mysql_num_rows($xiaotu_xiang);$i++){
		$xiaotu_xiang_pic[$i]=mysql_fetch_array($xiaotu_xiang,MYSQLI_ASSOC);
	}
	class indexdata{//类
		
	}
	
	$index=new indexdata();
	//详情页
	$index->fangdajingx=$fangdajingx_pic;
	$index->fangdajingd=$fangdajingd_pic;
	$index->xiaotu_xiang=$xiaotu_xiang_pic;
	echo json_encode($index);
?>