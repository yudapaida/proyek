<section id="mainBody">
<div class="container">
<h3 class="title"><span>Data Operator Futsal</span></h3>   

  <table border="1" class="table table-bordered table-hover">
        <thead>
          <tr >
            <th>Nama Futsal</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th >Aksi</th>
          </tr>
        </thead>
        <tbody>
      <?php 
        foreach($data as $row){
      ?>


          <tr>
            <td><?php echo $row['nama_futsal'];?></td>
            <td><?php echo $row['alamat'];?></td>
            <td><?php echo $row['deskripsi'];?></td>
            <td><?php echo $row['status'];?></td>
            <td>
              <?php
              if($row['status']=='confirmed') {
              ?>
              <a href="<?php echo base_url('/admin_ctr/konfirmasi')?>?no=<?php echo $row['id_futsal']; ?>"><button type="button" disabled="disabled" class="btn btn-success">Confirm</button></a>
              <?php }
              else { ?>
              <a href="<?php echo base_url('/admin_ctr/konfirmasi')?>?no=<?php echo $row['id_futsal']; ?>"><button type="button" class="btn btn-success">Confirm</button></a>
              <?php }
              ?>
              <a href="<?php echo base_url('/admin_ctr/hapus')?>?no=<?php echo $row['id_futsal']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
      <?php
      }
      
    ?>
        </tbody>
      </table>
</div>
</section>
