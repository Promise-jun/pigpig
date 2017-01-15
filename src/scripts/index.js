$('.btnList li').on('mouseover',function(){
	var num=$(this).index();
	$(this).addClass('active').siblings('li').removeClass('active');
	$('.picList').animate({'left',-12.5%*num},200,function(){
	  
	})
})