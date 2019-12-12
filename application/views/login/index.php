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
	<!-- start form -->
	<form method="post" action="<?=base_url('login/auth');?>">
		<!-- input title -->
		<div class="form-group">
    		<label for="inputUsernname">Username</label>
    		<input name="username" type="text" class="form-control" id="inputUsername" placeholder="Your username">
  		</div>
  		<!-- input description -->
		<div class="form-group">
			<label for="inputPassword">Username</label>
			<input name="password" type="password" class="form-control" id="inputPassword" placeholder="Your password">
		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<!-- end of form -->
</div>