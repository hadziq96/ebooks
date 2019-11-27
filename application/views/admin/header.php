<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
	<?php 
	//title for admin
		if(isset($title)){
			echo $title;
		}else{
			echo "welcome";
		}
	?>
	</title>
	<!-- css loader-->
	<link rel="stylesheet" href="<?=base_url('asset/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/style.css');?>">
</head>
<body>
	<!-- logo -->
	<nav class="navbar navbar-dark bg-custom mb-3">
	<div class="container">	
		<a class="navbar-brand" href="<?=base_url('admin/book');?>">
			Ebooks
		</a>
		<a class="float-right mr-3 btn btn-danger" href="<?=base_url('logout');?>">
			Logout
		</a>
	</div>
	</nav>