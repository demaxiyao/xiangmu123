;(function($){
	
	//主页面
	var $lunbotu=$('.middleside-s .pic li a');
	var $section_6=$('.msg ul li a');
	var $miaoshalan=$('.hotpro-middle ul li p a');
	var $jiankangtuijian=$('.health ul li .imgpro');
	var $slide_1=$('.switchB-1 ul li a');
	var $diyipai_cb=$('.contextN ul li .cb_t');
	var $slide_2=$('.switchB-2 ul li a');
	var $dierpai_muying=$('.contextN ul li .cb_y');
	var $slide_3=$('.switchB-3 ul li a');
	var $disanpai_nanke=$('.contextN ul li .cb_u');
	var $slide_4=$('.switchB-4 ul li a');
	var $disipai_baojian=$('.contextN ul li .cb_i');
	var $slide_5=$('.switchB-5 ul li a');
	var $diwupai_jixie=$('.contextN ul li .cb_o');
	var $remenpinpai=$('.Brand ul li a');
	
	
	
	$.ajax({
		type:"post",
		url:"http://localhost/xiangmu123/xiangmu1/php/ljphp.php",
		dataType:'json',
		async:true
	}).done(function(data){
		//主页面    轮播图
		$.each(data.lunbotu,function(index,value){
			
			$lunbotu.eq(index).append('<img src="'+value.pic+'">');
			
		})
		//
		$.each(data.section_6,function(index,value){
			$section_6.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.miaoshalan,function(index,value){
			$miaoshalan.eq(index).append('<img style="width:150px;height:150px" src="'+value.pic+'">');		
		})
		
		$.each(data.jiankangtuijian,function(index,value){
			$jiankangtuijian.eq(index).append('<img style="width:150px;height:150px" src="'+value.pic+'">');		
		})
		
		$.each(data.slide_1,function(index,value){
			$slide_1.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.diyipai_cb,function(index,value){
			$diyipai_cb.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.slide_2,function(index,value){
			$slide_2.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.dierpai_muying,function(index,value){
			$dierpai_muying.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.slide_3,function(index,value){
			$slide_3.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.disanpai_nanke,function(index,value){
			$disanpai_nanke.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.slide_4,function(index,value){
			$slide_4.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.disipai_baojian,function(index,value){
			$disipai_baojian.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.slide_5,function(index,value){
			$slide_5.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.diwupai_jixie,function(index,value){
			$diwupai_jixie.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		$.each(data.remenpinpai,function(index,value){
			$remenpinpai.eq(index).append('<img src="'+value.pic+'">');		
		})
		
		
		
	});
	
})(jQuery);
