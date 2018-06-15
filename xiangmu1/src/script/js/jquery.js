;(function($){
	//获取数据

	 $middleside = $('.middleside-s');
	 $picli = $('.middleside-s .pic li ');
	 $btn= $('.middleside-s .quan span');
	 $click_1= $('.middleside-s .lr .click_1');
	 $click_2= $('.middleside-s .lr .click_2');
	 num=0;//当前点击的索引
	 $piclilength = $picli.size();
     timer = null;
	//小圆圈触发事件
	$btn.on('click',function(){
		num=$(this).index();
	 	tabswitch();
	});
	
	//右边
	$click_2.on('click',function(){
		num++;
		if(num>$piclilength-1){
			num=0;
		}
		tabswitch();
	})
	//左边
	$click_1.on('click',function(){
		num--;
		if(num<0){
			num=$piclilength-1;
		}
		tabswitch();
	})
	function tabswitch() {
        $btn.eq(num).addClass('action').siblings($btn).removeClass('action');
        $picli.eq(num).animate({ opacity: 1 }).siblings($picli).animate({ opacity: 0 });
   };
   	
   	timer=setInterval (function(){
   		$click_2.click();
   	},3000)
   	
   	$middleside.hover(function() {
        clearInterval(timer);
    }, function() {
        timer = setInterval(function() {
            $click_2.click();
        }, 3000);
    });
        
})(jQuery)