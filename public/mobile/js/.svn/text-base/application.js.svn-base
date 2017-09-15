$(function(){
	$(".headerbar .ic_search").click(function(){
		$(".headerbar .face1").css('display','none');
		$(".headerbar .face2").css('display','block');
	});
	$(".headerbar button[type=reset]").click(function(){
		$(".headerbar .face2").css('display','none');
		$(".headerbar .face1").css('display','block');
	});
	
	$(".userinfo").click(function(){
		$(this).toggleClass('on');
	});

	$("[data-loadmore]").live('click',function(){
		var btn = $(this);
		if(btn.attr('data-loading') == 1){
			return;
		}
		btn.attr('data-loading',1);
		$.get(btn.attr('data-loadmore'),function(d){
			if(d.nextPageUrlWithInput != null){
				btn.attr('data-loadmore',d.nextPageUrlWithInput).attr('data-loading',0);
			}else{
				btn.css('visibility','hidden');
			}
			$(btn.attr('data-listwrp')).append($(d.html));
		});
	});


	$(".tabs .tab").click(function(event) {
		if($(this).hasClass('active')){
			return;
		}
		$(this).addClass('active').siblings('.tab').removeClass('active');
		$(this).parents(".tabs").siblings(".tab_content[data-tab-index="+$(this).attr('data-tab-index')+"]").addClass('active').siblings('.tab_content').removeClass('active');
	});

});