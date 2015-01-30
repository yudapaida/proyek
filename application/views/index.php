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
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/navbar.css');?>" type="text/css" media="all" />
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
		<div class="offset6 span6 right-align loginArea">
			<a href="#login" role="button" data-toggle="modal"><span class="btn btn-mini"> Login  </span></a> 
			<a href="<?php echo base_url();?>page_ctr/reg_opt"><span class="btn btn-mini"> Register  </span></a> 
		</div>
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
		<a class="brand" href="<?= base_url();?>"><img src="<?php echo base_url('assets/themes/images/new_logo.png');?>" alt="Bootsshop"></a>
	</div>
	</div>

</div>
</header>

<!-- MENU UTAMA
======================================================================================================================== -->
<div class="container">
<section id="mainCarousel">
	<div class="displayStyle">
	<div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>



		 	<!-- Animasi Gambar -->
		  	<div class="carousel-inner">
		  		<?php 
		  		 $i=0;
		  		 foreach ($data as $item) {
		  		?>
		  		<div class="<?php if ($i==0)echo 'item active'; else echo 'item'; $i++;?>">
				<div class="row">
					<div class="span6">
						<img src="<?php $logo=$item['gambar'];
										$url = "assets/themes/images/carousel/".$logo;
										echo base_url($url);?>" alt="#" />
					</div>
					<div class="span6">
						<div class="promoDetail">
								  <h1><?php echo $item['nama_futsal']?> </h1>  
								  <h1><span><?php echo $item['alamat']?></span></h1>
								  <h1><span><?php echo $item['deskripsi']?></span></h1>
								  	
								  
								   
								<p>Reviews: <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star"></i> <i class="icon-star-empty"></i></p>
								<br>
								<div class="cntr">
								<h3>08.00 - 23.00 WIB</h3>
								<a class="btn btn-success" href="<?php echo base_url();?>details_ctr" >Want to book ?</a> 
								<br>
								<br>
								<div class="fb-like" data-href="http://www.bootstrappage.com/" data-send="false" data-layout="button_count" data-width="80" data-show-faces="true"></div>
								<br>
								</div>
						</div>
					</div>
				</div>
				</div>
				<?php } ?>
		  	</div>

		  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			
	</div>
	</div>
</section>
</div>
<!-- <section id="scn">
	<h3 class="title"><span>LOKASI</span></h3>
	<div class="row">
	<div class="g-map">
		<iframe src="https://mapsengine.google.com/map/embed?mid=zI7L70ekKoVY.koqy1OFW_PQc" width="640" height="480"></iframe>
	</div>
	</div>
</section>
</div> -->

  </body>
</html>