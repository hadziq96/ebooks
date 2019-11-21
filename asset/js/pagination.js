$(document).ready(function(){
	function ajax(page){
		$.ajax({
			type:'POST',
			data:{page:page},
			url:$('.base_url').attr('id')+"page/pagination",
			success:function(result){
					$(".list-book").html(result);
			
					// click button
					$(".ajax_pagination").on("click",function(){
						ajax($(this).attr('id'));
						// base_url variable from guest controller. see controller to see detail
						window.history.pushState(null,null,"/"+$('.change_url').attr('id')+"/book/page/"+$(this).attr('id'));
					});
				}
		});
	}
	// load book first time
	ajax($(".page").attr("id"));
	
});