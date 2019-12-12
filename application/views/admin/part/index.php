<div class="container">
<!-- message of action add and edit -->
	<?php
	$flashdata=$this->session->flashdata();
	if($flashdata!=null){?>
		<div class="alert <?=$flashdata['color'];?> alert-dismissible fade show" role="alert">
			<?=$flashdata['message'];?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php }?>
<!-- end of message -->

<!-- add part button -->
	<div class="mb-4 list-group-item d-flex justify-content-center align-item-center">
		<a href="<?=base_url('admin/part/add/'.$id_book);?>">
			Add part
		</a>
	</div>
<!-- end of button -->

<!-- table of part -->
	<div class="list-scrollable">
		<table class="table table-bordered">
    		<thead>
      			<tr>
        			<th>Id</th>
        			<th>Title</th>
        			<th>Edit</th>
        			<th>Delete</th>
      			</tr>
    		</thead>
    		<tbody>
    		<?php foreach($part as $a_part){?>
      			<tr>
        			<td>
        				<?=$a_part['id'];?>
        			</td>
        			<td>
        				<?=$a_part['title'];?>
        			</td>
        			<td>
        				<a href="<?=base_url('admin/part/edit/'.$a_part['id']);?>">
        					<i class="fa fa-edit"></i>
        				</a>
        			</td>
					<td>
        				<button class="delete border-0 text-primary" data-toggle="modal" data-target="#exampleModal" id="<?=base_url('admin/part/confirm/'.$a_part['id']);?>"><i class="fa fa-trash"></i></button>
        			</td>
       			</tr>
       		<?php }?>
     		</tbody>
 		</table>
 	</div>
 <!-- end of table -->
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
 					Sure delete this part?
 				</div>
 				<div class="modal-footer">
 					<a href="#" class="del-button btn btn-danger">Delete</a>
 				</div>
 			</div>
 		</div>
 	<!-- end of modal -->
 </div>