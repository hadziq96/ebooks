<!-- container and layout -->
<div class="container">
	<div class="mb-4 card-header text-center">
    	Edit a book (<?=$book['title'];?>)
	</div>
	<!-- start form -->
	<form method="post" action="<?=base_url('admin/book/edit/'.$book['id']);?>">
		<!-- input title -->
		<div class="form-group">
    		<label for="inputTitle">Title</label>
    		<input name="title" type="text" class="form-control" id="inputTitle" value="<?=$book['title'];?>">
  		</div>
  		<!-- input description -->
		<div class="form-group">
    		<label for="inputDescrition">Description</label>
    		<textarea rows="5" name="description" class="form-control text-left" id="inputDescription"><?=$book['description'];?></textarea>
  			<input type="hidden" name="id" value="<?=$book['id'];?>">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- end of form -->
</div>