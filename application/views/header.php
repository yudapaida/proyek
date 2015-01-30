<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <title><?php// echo"$tampil[nama_toko] | $tampil[website]"; ?></title> -->
    <title> Futsal Booking </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">	
<!-- styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/shopping.css');?>" type="text/css" media="all" />
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/themes/less/bootstrap.less');?>">
	<script type="text/javascript" src="<?php echo base_url();?>assets/themes/js/swfobject/swfobject.js"></script>
	<script src="<?php echo base_url('assets/themes/js/less/less.js');?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/themes/js/swfobject/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/themes/js/swfobject/flexpaper.js');?>"></script>
  </head>

<body>
  <!-- Facebook script -->
	<div id="fb-root"></div>

<!-- HEADER  -->
 <header class="header">
 	<div class="container">
	<div class="row">
		<?php if($this->session->userdata('akun') ==""){ ?>
		<div class="offset6 span6 right-align loginArea">
			<a href="#login" role="button" data-toggle="modal"><span class="btn btn-mini"> Login  </span></a> 
			<a href="register.php"><span class="btn btn-mini"> Register  </span></a> 
		</div>
		<?php }else{ ?>
		<div class="offset6 span6 right-align loginArea">
            	Selamat Datang <b><?php echo $this->session->userdata('akun');?></b> | 
            	<a href="<?php echo base_url();?>login_ctr/logout">Logout</a>
		</div>
		<?php } ?>
	</div>
	

	<!-- Login Block -->
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Please Login</h3>
	  </div>
	  <div class="modal-body">
		<form class="form-horizontal loginFrm" action="<?php echo base_url();?>login_ctr/masuk" method="post">
		  <div class="control-group">								
			<input type="text" id="inputEmail" name="username" placeholder="Email">
		  </div>
		  <div class="control-group">
			<input type="password" id="inputPassword" name="password" placeholder="Password">
		  </div>
		  <div class="control-group">
			<label class="checkbox">
			<input type="checkbox"> Remember me
			</label>
		  </div>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  	</form>
	  </div>
	</div>
	</div>


	<!-- LOGO -->
	<div class="navbar">
	<div class="navbar-inner">
		<a class="brand" href="index.php"><img src="<?php echo base_url('assets/themes/images/new_logo.png');?>" alt="Bootsshop"></a>
	</div>
	</div>

</div>
</header>