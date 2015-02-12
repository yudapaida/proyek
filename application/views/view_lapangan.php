<!-- MENU UTAMA
======================================================================================================================== -->

<section id="mainBody">
<div class="container">
  <ul class="nav nav-pills">
  <li role="presentation"><a href="#">Jadwal</a></li>
  <li role="presentation" class="active"><a href="#">Lapangan</a></li>
  <li role="presentation"><a href="<?php echo base_url('operator_ctr/view_konfirmasi')?>">Transaksi</a></li>
</ul>
<h3 class="title"><span>Lapangan </span></h3>
<ul>
    <li><a href="<?php echo base_url('lapangan_crud/tambah_lap')?>"><button class="btn btn-info" >+Tambah Lapangan</button></a> </li>
</ul>      
        <!-- <p align="right"><a href="<?php echo site_url('rs_controler/tambah_data')?>" class="btn btn-primary">Tambah Data</a></p> -->

  <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr >
            <th>Nama Lapagan </th>
            <th>Deskripsi</th>
            <th>Tarif Pagi</th>
            <th>Tarif Siang</th>
            <th>Tarif Malam</th>
            <th >Aksi</th>
          </tr>
        </thead>
        <tbody>
      <?php 
        foreach($data as $row){
      ?>


          <tr>
            <td><?php echo $row['nama_lap'];?></td>
            <td><?php echo $row['deskripsi'];?></td>
            <td><?php echo $row['pagi'];?></td>
            <td><?php echo $row['siang'];?></td>
            <td><?php echo $row['malam'];?></td>
            <td> <a href="<?php echo base_url('/lapangan_crud/lihat')?>?no=<?php echo $row['id_lap']; ?>"><button type="button" class="btn btn-info">Update</button></a>
              <a href="<?php echo base_url('/lapangan_crud/hapus')?>?no=<?php echo $row['id_lap']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
            </tr>
      <?php
      } //print_r($mahasiswa);
      
    ?>
        </tbody>
      </table>
</div>
</section>
