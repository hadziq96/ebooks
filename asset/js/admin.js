$(document).ready(function(){

	$(".delete").on("click", function(){
		let url=$(this).attr('id');
 		$.ajax({
 			type:"POST",
 			url:url,
 			success:function(result){
 					$(".del-button").attr('href', result);
 				}
 		})
	 });
})