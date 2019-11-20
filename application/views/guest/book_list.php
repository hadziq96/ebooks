<div class="container">
	<div class="row">
	<?php foreach($book as $a_book){?>
	<div class="col-md-6">
	<div class="card mt-4 border-right-0">
		<div class="card-header bg-custom text-white border-bottom-0">
			<b><?=$a_book['title'];?></b>
		</div>
		<div class="card-body">
			<?=$a_book['description'];?>
		</div>
		<div class="card-footer bg-light">
			<a href="<?=base_url('book/'.$a_book['id']);?>">See more</a>
		</div>
	</div>
	</div>
	<?}?>
	</div>
</div>

<!-- pagination link -->
<ul class="mt-3 pagination justify-content-center">
		<?php if($page_number!=1){?>
		<li class="page-item"><button class="page-link ajax_pagination" id="<?=$page_number-1;?>">prev</button></li>
		<?}?>
		<?php
			if($total_page>=5){
				if($page_number<=2){
					$xy=1;
					$xyz=$page_number+3;
				}elseif($page_number>=$total_page-1){
					$xy=$page_number-3;
					$xyz=$total_page;
				}else{
					$xy=$page_number-2;
					$xyz=$total_page;
				}
			}else{
				$xy=1;
				$xyz=$total_page;
			}
			 for($y=$xy; $y<=$xyz; $y++){
				if($y==$page_number){?>
					<li class="page-item active"><button style="color:blue;" class="text-white page-link ajax_pagination" id="<?=$y;?>"><?= $y;?></button></li>
				<?}else{?>
					<li class="page-item"><button class="page-link ajax_pagination" id="<?=$y;?>"><?= $y;?></button></li>
				<?}
			}?>

		<?php if($page_number!=$total_page && $total_page!=0){?>
		<li class="page-item"><button class="page-link ajax_pagination" id="<?=$page_number+1;?>">next</button></li>
		<?}?>
	</ul>