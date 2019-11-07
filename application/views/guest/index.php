<!-- start content -->
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