$(document).ready(function(){
	// function search ajax
	$('.search-button').on('click', function(){
		if($('.search-input').val().length>0){
			window.location.href=$('.base_url').attr('id')+"book/search/"+$('.search-input').val();
		}else{
			alert("hmmm");
		}
	});
});