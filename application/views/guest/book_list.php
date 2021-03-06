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
	<?php }?>
	</div>
</div>

<!-- pagination link -->
<ul class="mt-3 pagination justify-content-center">
		<?php if($page_number!=1){?>
		<li class="page-item"><button class="page-link ajax_pagination" id="<?=$page_number-1;?>">prev</button></li>
		<?php }?>
		<?php
			if($total_page>=5){
				if($page_number<=2){
					$start=1;
					$end=$page_number+3;
				}elseif($page_number>=$total_page-1){
					$start=$page_number-3;
					$end=$total_page;
				}else{
					$start=$page_number-2;
					$end=$total_page;
				}
			}else{
				$start=1;
				$end=$total_page;
			}
			 for($number_link=$start; $number_link<=$end; $number_link++){
				if($number_link==$page_number){?>
					<li class="page-item active"><button style="color:blue;" class="text-white page-link ajax_pagination" id="<?=$number_link;?>"><?= $number_link;?></button></li>
				<?php }else{?>
					<li class="page-item"><button class="page-link ajax_pagination" id="<?=$number_link;?>"><?= $number_link;?></button></li>
				<?php }
			}?>

		<?php if($page_number!=$total_page && $total_page!=0){?>
		<li class="page-item"><button class="page-link ajax_pagination" id="<?=$page_number+1;?>">next</button></li>
		<?php }?>
	</ul>