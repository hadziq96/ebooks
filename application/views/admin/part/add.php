<!-- container and layout -->
<div class="container">
	<div class="mb-4 card-header text-center">
    	Add a new part
	</div>
	<!-- start form -->
	<form method="post" action="<?=base_url('admin/part/add/'.$id_book);?>">
		<!-- input title -->
		<div class="form-group">
    		<label for="inputTitle">Title</label>
    		<input name="title" type="text" class="form-control" id="inputTitle" placeholder="Insert title here">
  		</div>
  		<!-- input description -->
		<div class="form-group">
    		<label for="inputArticle">Description</label>
    		<textarea rows="5" name="article" class="form-control text-left" id="inputArticle" placeholder="Insert article here"></textarea>
    		<input type="hidden" name="id_book" value="<?=$id_book;?>">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- end of form -->
</div>