<section id="mainBody">
<div class="container">
  <ul class="nav nav-pills">
    <li role="presentation"><a href="<?php echo base_url('page_ctr/booking_page')?>">Booking</a></li>
    <li role="presentation" class="active"><a href="#">Transaksi</a></li>
  </ul>
<h3 class="title"><span>Daftar Transaksi</span></h3>
<ul>
    <li><a href="<?php echo base_url('page_ctr/booking_page')?>"><button class="btn btn-info" >Booking Lapangan</button></a> </li>
</ul>      
        <!-- <p align="right"><a href="<?php echo site_url('rs_controler/tambah_data')?>" class="btn btn-primary">Tambah Data</a></p> -->

  <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr >
            <th>Nama</th>
            <th>Lokasi Futsal</th>
            <th>Lapangan</th>
            <th>Jam</th>
            <th>Harga</th>
            <th>Konfirmasi</th>
          </tr>
        </thead>
        <tbody>
      <?php 
        foreach($data as $row){
      ?>


          <tr>
            <td><?php echo $row['first'];?> <?php echo $row['last'];?></td>
            <td><?php echo $row['futsal'];?></td>
            <td><?php echo $row['lapangan'];?></td>
            <td><?php echo $row['jam'];?></td>
            <td><?php echo $row['harga'];?></td>
            <td> <a href="<?php echo base_url('/transaksi_ctr/konfirmasi')?>?no=<?php echo $row['id_transaksi']; ?>"><button type="button" class="btn btn-info">Konfirmasi</button></a>
            </td>
            </tr>
      <?php
      } //print_r($mahasiswa);
      
    ?>
        </tbody>
      </table>
</div>
</section>