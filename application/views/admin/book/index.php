<div class="container">
<!-- Message for action(edit and add)-->
	<?php $flashdata=$this->session->flashdata();?>
	<?php if($flashdata!=null){?>
		<div class="alert <?=$flashdata['color'];?> alert-dismissible fade show" role="alert">
			<?=$flashdata['message'];?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php }?>
<!-- end of message -->

<!-- add book button -->
	<div class=" mb-4 list-group-item text-center">
		<a href="<?=base_url('admin/book/add/');?>">
			Add Book
		</a>
	</div>
<!-- end of add button -->

<!-- table of book -->
	<div class="list-scrollable">
		<table class="table table-bordered">
   			<thead>
      			<tr>
      				<th>Id</th>
        			<th>Title</th>
        			<th>Part</th>
        			<th>Edit</th>
        			<th>Delete</th>
      			</tr>
    		</thead>
    		<tbody>
    		<?php foreach($book as $a_book){?>
      			<tr>
        			<td>
        				<?=$a_book['id'];?>
        			</td>
        			<td>
        				<?=$a_book['title'];?>
        			</td>
        			<td>
        				<a href="<?=base_url('admin/book/part/'.$a_book['id']);?>">
        					<i class="fa fa-list-alt"></i>
        				</a>
        			</td>
        			<td>
        				<a href="<?=base_url('admin/book/edit/'.$a_book['id']);?>">
        					<i class="fa fa-edit"></i>
        				</a>
        			</td>
        			<td>
        				<button class="delete border-0 text-primary" data-toggle="modal" data-target="#exampleModal" id="<?=base_url('admin/book/confirm/'.$a_book['id']);?>"><i class="fa fa-trash"></i></button>
        			</td>
       			</tr>
       		<?php }?>
     		</tbody>
 		</table>
 	</div>
	 <!--end of table -->
 
 	<!-- Modal -->
 	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header border-bottom-0">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 			<div class="modal-body">
 				Sure delete this book?
 			</div>
 			<div class="modal-footer">
 				<a href="#" class="del-button btn btn-danger">Delete</a>
 			</div>
 		</div>
 	</div>
 	<!-- end of modal -->
 </div>
 
 