function pageScroll(){ 
	window.scrollBy(0,-100); 
	scrolldelay = setTimeout('pageScroll()',10); 
	var sTop=document.documentElement.scrollTop+document.body.scrollTop; 
	if(sTop==0) clearTimeout(scrolldelay); 
} 
$(function(){
	$(window).on('scroll',function(e){
		if(window.scrollY > 300){
			$("#backtotop").addClass('on');
		}else{
			$("#backtotop").removeClass('on');
		}
	});
	$(".topheader .nav .userbox .name,.topheader .nav .userbox .headimg,.topheader .nav .userbox .menu").hover(function(){
		$(".topheader .nav .userbox .menu").addClass("on");
	},function(){
		$(".topheader .nav .userbox .menu").removeClass("on");
	});
	$(".topheader .nav .userbox .login").click(function(){
		$(".pop_login").addClass("on");
	});
	$(".pop_login .loginbox .close").click(function(){
		$(".pop_login").removeClass("on");
	});
	$("#linktoforget").click(function() {
		// body...
		$(".popwrp").removeClass('on');
		$('.popwrp.pop_forget').addClass('on');
	});
	$(".topheader .nav .userbox .register").click(function(){
		$(".pop_register").addClass("on");
	});
	$(".pop_register .close").click(function(){
		$(".pop_register").removeClass("on");
	});

	$(".btabs .tab").click(function(){
		if($(this).hasClass('on')) return;
		$("#"+$(this).attr('data-q')).css('display','block').siblings('.tabcontent').css("display","none");
		$(this).addClass('on').siblings('.tab').removeClass('on');
	});

	/*$(".ajaxedit").on('change',function(e){
		var val = $(this).val();
		var url = $(this).attr('data-api');
		var name = $(this).attr('data-name') !== undefined?$(this).attr('data-name'):$(this).attr('name');
		$.post(url,{name:name,data:val},function(e){
			console.log(e);
		});
	});*/

});