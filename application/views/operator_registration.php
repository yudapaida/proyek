<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Registration</span></h3>
<ul>
    <li><a href="<?= base_url();?>">Home</a></li>
</ul>
  <div class="well">
    <form class="form-horizontal" action="<?= base_url();?>futsal_crud/insert_operator" method="POST" enctype="multipart/form-data">
      <h3>Your Personal Information</h3>
      <div class="control-group">
        <label class="control-label" for="nama_futsal">Futsal Name<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="nama_futsal" name="nama_futsal" placeholder="Futsal Name">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="username">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="username" name="username" placeholder="Email">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="password">Password <sup>*</sup></label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="alamat">Address<sup>*</sup></label>
        <div class="controls">
          <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Address"></textarea>
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
          <input class="btn btn-large" type="submit" value="Register"/>
        </div>
      </div>
           
      <p class="pull-right badge badge-important">[ * ] Required field  </p>
      <br>

    </form> 
  </div>
</div>
</section>

<!-- <form action="<?= base_url();?>futsal_crud/do_upload" method="POST"   enctype="multipart/form-data">

<input type="file" name="gambar" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
 -->