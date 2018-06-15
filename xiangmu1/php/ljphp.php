<?php
	//轮播图数据接口
	mysql_connect('localhost','root','');	
	mysql_select_db('xiangmuyi');
	mysql_query('SET NAMES UTF8');
	//主页面的数据	
	$lunbotu=mysql_query("select * from lunbotu");
	$lunbotu_pic=array();
	for($i=0;$i<mysql_num_rows($lunbotu);$i++){
		$lunbotu_pic[$i]=mysql_fetch_array($lunbotu,MYSQLI_ASSOC);
	};
	
	$section_6=mysql_query("select * from section_6");
	$section_6_pic=array();
	for($i=0;$i<mysql_num_rows($section_6);$i++){
		$section_6_pic[$i]=mysql_fetch_array($section_6,MYSQLI_ASSOC);
	};
	
	$miaoshalan=mysql_query("select * from miaoshalan");
	$miaoshalan_pic=array();
	for($i=0;$i<mysql_num_rows($miaoshalan);$i++){
		$miaoshalan_pic[$i]=mysql_fetch_array($miaoshalan,MYSQLI_ASSOC);
	};
	
	$jiankangtuijian=mysql_query("select * from jiankangtuijian");
	$jiankangtuijian_pic=array();
	for($i=0;$i<mysql_num_rows($jiankangtuijian);$i++){
		$jiankangtuijian_pic[$i]=mysql_fetch_array($jiankangtuijian,MYSQLI_ASSOC);
	};
	
	$slide_1=mysql_query("select * from slide_1");
	$slide_1_pic=array();
	for($i=0;$i<mysql_num_rows($slide_1);$i++){
		$slide_1_pic[$i]=mysql_fetch_array($slide_1,MYSQLI_ASSOC);
	};
	
	$diyipai_cb=mysql_query("select * from diyipai_cb");
	$diyipai_cb_pic=array();
	for($i=0;$i<mysql_num_rows($diyipai_cb);$i++){
		$diyipai_cb_pic[$i]=mysql_fetch_array($diyipai_cb,MYSQLI_ASSOC);
	};
	
	$slide_2=mysql_query("select * from slide_2");
	$slide_2_pic=array();
	for($i=0;$i<mysql_num_rows($slide_2);$i++){
		$slide_2_pic[$i]=mysql_fetch_array($slide_2,MYSQLI_ASSOC);
	};
	
	$dierpai_muying=mysql_query("select * from dierpai_muying");
	$dierpai_muying_pic=array();
	for($i=0;$i<mysql_num_rows($dierpai_muying);$i++){
		$dierpai_muying_pic[$i]=mysql_fetch_array($dierpai_muying,MYSQLI_ASSOC);
	};
	
	$slide_3=mysql_query("select * from slide_3");
	$slide_3_pic=array();
	for($i=0;$i<mysql_num_rows($slide_3);$i++){
		$slide_3_pic[$i]=mysql_fetch_array($slide_3,MYSQLI_ASSOC);
	};
	
	$disanpai_nanke=mysql_query("select * from disanpai_nanke");
	$disanpai_nanke_pic=array();
	for($i=0;$i<mysql_num_rows($disanpai_nanke);$i++){
		$disanpai_nanke_pic[$i]=mysql_fetch_array($disanpai_nanke,MYSQLI_ASSOC);
	};
	
	$slide_4=mysql_query("select * from slide_4");
	$slide_4_pic=array();
	for($i=0;$i<mysql_num_rows($slide_4);$i++){
		$slide_4_pic[$i]=mysql_fetch_array($slide_4,MYSQLI_ASSOC);
	};
	
	$disipai_baojian=mysql_query("select * from disipai_baojian");
	$disipai_baojian_pic=array();
	for($i=0;$i<mysql_num_rows($disipai_baojian);$i++){
		$disipai_baojian_pic[$i]=mysql_fetch_array($disipai_baojian,MYSQLI_ASSOC);
	};
	
	$slide_5=mysql_query("select * from slide_5");
	$slide_5_pic=array();
	for($i=0;$i<mysql_num_rows($slide_5);$i++){
		$slide_5_pic[$i]=mysql_fetch_array($slide_5,MYSQLI_ASSOC);
	};
	
	$diwupai_jixie=mysql_query("select * from diwupai_jixie");
	$diwupai_jixie_pic=array();
	for($i=0;$i<mysql_num_rows($diwupai_jixie);$i++){
		$diwupai_jixie_pic[$i]=mysql_fetch_array($diwupai_jixie,MYSQLI_ASSOC);
	};
	
	$remenpinpai=mysql_query("select * from remenpinpai");
	$remenpinpai_pic=array();
	for($i=0;$i<mysql_num_rows($remenpinpai);$i++){
		$remenpinpai_pic[$i]=mysql_fetch_array($remenpinpai,MYSQLI_ASSOC);		
	}
	
	//用户名
	$user=mysql_query("select * from user");
	$user_pic=array();
	for($i=0;$i<mysql_num_rows($user);$i++){
		$user_pic[$i]=mysql_fetch_array($user,MYSQLI_ASSOC);
	}
	
	//详情页的数据
	$fangdajingx=mysql_query("select * from fangdajingx");
	$fangdajingx_pic=array();
	for($i=0;$i<mysql_num_rows($fangdajingx);$i++){
		$fangdajingx_pic[$i]=mysql_fetch_array($fangdajingx,MYSQLI_ASSOC);
	}
	
	class indexdata{//类
		
	}
	$index=new indexdata();
	
	//主页面
	$index->lunbotu=$lunbotu_pic;
	$index->section_6=$section_6_pic;
	$index->miaoshalan=$miaoshalan_pic;
	$index->jiankangtuijian=$jiankangtuijian_pic;
	$index->slide_1=$slide_1_pic;
	$index->diyipai_cb=$diyipai_cb_pic;
	$index->slide_2=$slide_2_pic;
	$index->dierpai_muying=$dierpai_muying_pic;
	$index->slide_3=$slide_3_pic;
	$index->disanpai_nanke=$disanpai_nanke_pic;
	$index->slide_4=$slide_4_pic;
	$index->disipai_baojian=$disipai_baojian_pic;
	$index->slide_5=$slide_5_pic;
	$index->diwupai_jixie=$diwupai_jixie_pic;
	$index->remenpinpai=$remenpinpai_pic;
	//用户密码
	$index->user=$user_pic;
	
	//详情页
	$index->fangdajingx=$fangdajingx_pic;
	
	echo json_encode($index);
?>
