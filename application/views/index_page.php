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
					<div class="span6 coba">
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
								<a class="btn btn-success" href="<?php echo base_url();?>page_ctr/booking_page" >Want to book ?</a> 
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