<!-- MENU UTAMA
======================================================================================================================== -->

<section id="mainBody">
<div class="container">
  <ul class="nav nav-pills">
    <li role="presentation"><a href="#">Jadwal</a></li>
    <li role="presentation"><a href="<?php echo base_url('lapangan_crud/view_lap')?>">Lapangan</a></li>
    <li role="presentation" class="active"><a href="#">Transaksi</a></li>
  </ul>
<h3 class="title"><span>Daftar Konfirmasi Pesanan</span></h3>
        <!-- <p align="right"><a href="<?php echo site_url('rs_controler/tambah_data')?>" class="btn btn-primary">Tambah Data</a></p> -->

  <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr >
            <th>Nama Member</th>
            <th>Lapangan</th>
            <th>Jam</th>
            <th>Harga</th>
            <th>Bukti Konfirmasi</th>
            <th >Aksi</th>
          </tr>
        </thead>
        <tbody>
      <?php 
        foreach($data as $row){
      ?>


          <tr>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['lapangan'];?></td>
            <td><?php echo $row['jam'];?></td>
            <td><?php echo $row['harga'];?></td>
            <td><img src="<?php
                              $logo=$row['gambar'];
                              $url = "assets/themes/images/konfirmasi/".$logo;   
                              echo base_url($url);?>" height="50px" width="100px"></td>
            <?php if($row['status']=='booked') {
            ?>
            <td> <button type="button" class="btn btn-success" disabled="disabled">Confirmed</button></td>
            <?php }
            else { ?>
            <td> <a href="<?php echo base_url('/operator_ctr/konfirmasi_status')?>?no=<?php echo $row['id_transaksi']; ?>"><button type="button" class="btn btn-info">Confirm</button></a></td>
            <?php } ?>
            </tr>
      <?php
      }
    ?>
        </tbody>
      </table>
</div>
</section>
