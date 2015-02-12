<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Konfirmasi Pembayaran</span></h3>
<?php 
        foreach($data as $row){
      ?>
	<div class="well">
    <form class="form-horizontal" action="<?= base_url();?>transaksi_ctr/insert_konfirmasi" method="POST" enctype="multipart/form-data">
      <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $row['id_transaksi'];?>" visibility="hidden">
      <div class="control-group">
        <label class="control-label" for="nama_user">Nama</label>
        <div class="controls">
          <input type="text" id="nama_user" name="nama_user" value="<?php echo $row['first'];?> <?php echo $row['last'];?>" readonly>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lokasi_futsal">Lokasi Futsal</label>
        <div class="controls">
          <input type="text" id="lokasi" name="lokasi" value="<?php echo $row['futsal'];?>" readonly>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lapangan">Nama Lapangan </label>
        <div class="controls">
          <input type="text" id="lapangan" name="lapangan" value="<?php echo $row['lapangan'];?>" readonly>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="jam_mulai">Jam Mulai</label>
        <div class="controls">
          <input type="text" id="jam_mulai" name="jam_mulai" value="<?php echo $row['jam'];?>" readonly>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="harga">Biaya</label>
        <div class="controls">
          <input type="text" id="harga" name="harga" value="<?php echo $row['harga'];?>" readonly>
        </div>
      </div>
      <?php } ?>
      <div class="control-group">
        <label class="control-label" for="gambar">Bukti Pembayaran <sup>*</sup></label>
        <div class="controls">
          <input type="file" name="userfile"/>
        </div>
      </div> 
      <div class="control-group">
        <div class="controls">
          <input class="btn btn-large" type="submit" value="Konfirmasi Pembayaran"/>
        </div>
      </div>
           
      <p class="pull-right badge badge-important">[ * ] Upload/Sertakan gambar bukti pembayaran  </p>
      <br>

    </form> 
  </div>

</div>
</section>
