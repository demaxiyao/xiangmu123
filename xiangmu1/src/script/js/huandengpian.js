;
(function() {
    var $btn_1 = $('.contextM .pircer-1 dl dd'); 
    var $pic_1 = $('.contextM .switchB-1 ul li');
    //添加按钮事件
    $btn_1.on('mouseover', function() {			
		var $num=$(this).index();		
		$pic_1.eq($num).show().siblings().hide();
              
    });  
})();
