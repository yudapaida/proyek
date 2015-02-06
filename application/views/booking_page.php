<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Pesan Futsal </span></h3>
	<div class="row">
		<?php 
		foreach ($data as $item) {

		
		?>
		<div class="span3">
			<div class="well well-small">
				<a class="displayStyle" href="#"><img src="<?php
															$logo=$item['gambar'];
															$url = "assets/themes/images/carousel/".$logo;	 
															echo base_url($url); ?>"></a>
				<h5><?php echo $item['nama_futsal']; ?></h5>
				<center><p><a class="btn btn-success" href="<?php echo base_url('jadwal_ctr/lihat_jadwal')?>?id=<?php echo $item['id_futsal']; ?>"> Lihat Jadwal </a></p></center>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</section>