$(document).ready(function(){
	function ajax(page,search){
		$.ajax({
			type:'POST',
			data:{
					page:page,
					search:search
				},
			url:$('.base_url').attr('id')+"page/search",
			success:function(result){
					$(".list-book").html(result);
			
					// click button
					$(".ajax_pagination").on("click",function(){
						ajax($(this).attr('id'),$('.search').attr('id'));
						// base_url variable from guest controller. see controller to see detail
						window.history.pushState(null,null,"/"+$('.change_url').attr('id')+"/book/search/"+$('.search').attr('id')+"/"+$(this).attr('id'));
					});
				}
		});
	}
	// load book first time
	ajax($(".page").attr("id"),$('.search').attr('id'));
	$('.search-input').val($('.search').attr('id'));
	
});