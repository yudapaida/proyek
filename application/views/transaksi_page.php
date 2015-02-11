<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Konfirmasi Pembayaran</span></h3>
	<div class="well">
    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label" for="nama_user">Nama</label>
        <div class="controls">
          <input type="text" id="nama_user" name="nama_user" value="Yuda Hermawan" disabled>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lokasi_futsal">Lokasi Futsal</label>
        <div class="controls">
          <input type="text" id="lokasi" name="lokasi" placeholder="Lokasi Futsal">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="lapangan">Nama Lapangan </label>
        <div class="controls">
          <input type="text" id="lapangan" name="lapangan" placeholder="Nama Lapangan">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="jam_mulai">Jam Mulai</label>
        <div class="controls">
          <input type="text" id="jam_mulai" name="jam_mulai" placeholder="Jam Mulai">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="jam_selesai">Jam Selesai</label>
        <div class="controls">
          <input type="text" id="jam_selesai" name="jam_selesai" placeholder="Jam Selesai">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="harga">Total Harga</label>
        <div class="controls">
          <input type="text" id="harga" name="harga" placeholder="Harga">
        </div>
      </div>
      
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
