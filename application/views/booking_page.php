<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
	<ul class="nav nav-pills">
    	<li role="presentation"><a href="<?php echo base_url('page_ctr/index_user')?>">Home</a></li>
    	<li role="presentation" class="active"><a href="#">Booking</a></li>
    	<li role="presentation"><a href="<?php echo base_url('transaksi_ctr/view_transaksi')?>">Transaksi</a></li>
  	</ul>
<h3 class="title"><span>Pesan Futsal </span></h3>
	<div class="row">
		<?php 
		foreach ($data as $item) {

		
		?>
		<div class="span3">
			<div class="well well-small">
				<div class="gambar-user"> 
				<a class="displayStyle" href="#"><img src="<?php
															$logo=$item['gambar'];
															$url = "assets/themes/images/carousel/".$logo;	 
															echo base_url($url); ?>"></a>
				</div>
				<h5><?php echo $item['nama_futsal']; ?></h5>
				<center><p><a class="btn btn-success" href="<?php echo base_url('jadwal_ctr/lihat_jadwal')?>?id=<?php echo $item['id_futsal']; ?>"> Lihat Jadwal </a></p></center>

			</div>
		</div>
		<?php } ?>
	</div>
</div>
</section>