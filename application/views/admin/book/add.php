<!-- container and layout -->
<div class="container">
	<div class="mb-4 card-header text-center">
    	Add a new book
	</div>
	<!-- start form -->
	<form method="post" action="<?=base_url('admin/book/add');?>">
		<!-- input title -->
		<div class="form-group">
    		<label for="inputTitle">Title</label>
    		<input name="title" type="text" class="form-control" id="inputTitle" placeholder="Insert title here">
  		</div>
  		<!-- input description -->
		<div class="form-group">
    		<label for="inputDescrition">Description</label>
    		<textarea rows="5" name="description" class="form-control text-left" id="inputDescription" placeholder="Insert description here"></textarea>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- end of form -->
</div>