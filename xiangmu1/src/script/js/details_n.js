;(function($){
	var $fangdajingx=$('.main .wrap .spic');
	$.ajax({
		type:"post",
		url:"http://localhost/xiangmu123/xiangmu1/php/details.php",
		dataType:'json',
		async:true
	}).done(function(data){
		$.each(data.fangdajingx,function(index,value){
			$fangdajingx.append('<img src="'+value.user+'">')
		})
		
	});
	console.log($fangdajingx);
})(jQuery);