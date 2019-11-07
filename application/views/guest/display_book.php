<!-- start content -->
<div class="container">
	<h3><?=$book['title'];?></h3>
	<p>
		<?=$book['description'];?>
		<br>and its part for this book:
	</p>
	<ul class="list-group">
		<!-- conditional if part is null -->
		<?php if(count($part)==0){?>
			<li class="list-group-item">
				No part in this book
			</li>
		<?}?>
		
		<!-- if conditional return false -->
		<?php foreach($part as $a_part){?>
		<li class="list-group-item mb-1">
			<a href="<?=base_url('part/'.$a_part['id']);?>">
				<?=$a_part['title'];?>
			</a>
		</li>
		<?}?>
	</ul>
</div>