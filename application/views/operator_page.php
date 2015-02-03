<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Data Lapangan</span></h3>
  <div class="well">
    <form class="form-horizontal" action="<?= base_url();?>lapangan_crud/insert_lap" method="POST" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label" for="nama_lap">Nama Lapangan<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="nama_lap" name="nama_lap" placeholder="Nama Lapangan">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="deskripsi">Description<sup>*</sup></label>
        <div class="controls">
          <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" placeholder="Description"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="gambar">Picture<sup>*</sup></label>
        <div class="controls">
          <input type="file" name="userfile"/>
        </div>
      </div> 
      <div class="control-group">
        <div class="controls">
          <input class="btn btn-large" type="submit" value="Submit"/>
        </div>
      </div>
           
      <p class="pull-right badge badge-important">[ * ] Required field  </p>
      <br>

    </form> 
  </div>
</div>
</section>