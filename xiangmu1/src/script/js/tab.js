;(function($){
	$right_a=$('.hotpro-N-R .r');
	$left_a=$('.hotpro-N-R .s');
	$yi=$('.hotpro-N-l .yi');
	$er=$('.hotpro-N-l .er');
	$pic_a=$('.hotProC ul li');
	
	$right_a.on('click',function(){
		$yi.html(2);
		$er.html(2);
		
	});
	$left_a.on('click',function(){
		$yi.html(1);
		$er.html(2);
		
	});
	
})(jQuery);
