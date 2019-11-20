<!-- start content -->
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="input-group col-md-6">
			<input type="text" class="form-control bg-light search-input" placeholder="Search book..">
			<div class="input-group-append">
				<button class="btn btn-primary search-button" type="button">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</div>
</div>
              
              
<div class="list-book">
</div>
<script src="<?=base_url('asset/js/jquery.js');?>"></script>
<script>
	$(document).ready(function(){
	function ajax(page){
		$.ajax({
			type:'POST',
			data:{page:page},
			url:"<?=base_url('page/pagination');?>",
			success:function(result){
					$(".list-book").html(result);
			
					// click button
					$(".ajax_pagination").on("click",function(){
						ajax($(this).attr('id'));
						// base_url variable from guest controller. see controller to see detail
						window.history.pushState(null,null,"/<?=$base_url;?>/book/page/"+$(this).attr('id'));
					});
				}
		});
	}
	// load book first time
	ajax("<?=$page;?>");
	
	});
</script>