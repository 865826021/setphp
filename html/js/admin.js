// JavaScript Document
$(document).ready(function(){
	//捕捉一级菜单
	$('ul#ula > li > a').not($('ul#ula li a:first')).click(function(){
			//alert($(this).html());
			var next=$(this).next(); //识别A后面的元素 也就是#ulb
			if(next.attr('id')=='ulb'){ //如果子元素存在
			
			//alert($('ul#ula > li > a').length-1);
			for(var k=0;k<$('ul#ula > li > a').length-1;k++){
				$('ul#ula > li > a').eq(k+1).next().slideUp('fast');
				$('ul#ula > li > a').eq(k+1).removeClass('hover');
					}
			
				if(next.css('display')=='none'){
					$(this).addClass('hover');
					next.slideDown('fast');
					}else{
					$(this).removeClass('hover');
					next.slideUp('fast');
						}	
						
		
				}
					})
	//安全退出按钮
	$('.head .pubw .b .bb').click(function(){
			var off=window.confirm('您确定要安全退出吗？');
			if(off){
				alert('您已经退出谢谢');
				}
					})
						   
})