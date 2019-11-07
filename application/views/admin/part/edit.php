<!-- container and layout -->
<div class="container">
	<div class="mb-4 card-header text-center">
    	Edit a part (<?=$part['title'];?>)
	</div>
	<!-- start form -->
	<form method="post" action="<?=base_url('admin/part/edit/'.$part['id']);?>">
		<!-- input title -->
		<div class="form-group">
    		<label for="inputTitle">Title</label>
    		<input name="title" type="text" class="form-control" id="inputTitle" value="<?=$part['title'];?>">
  		</div>
  		<!-- input description -->
		<div class="form-group">
    		<label for="inputArticle">Description</label>
    		<textarea rows="5" name="article" class="form-control text-left" id="inputArticle"><?=$part['article'];?></textarea>
    		<input type="hidden" name="id" value="<?=$part['id'];?>">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- end of form -->
</div>