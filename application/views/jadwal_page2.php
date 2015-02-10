<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">

Dropdown Chain
<script type="text/javascript" src="<?php echo base_url('assets/themes/js/jquery-1.8.3.min.js');?>"></script>
<script type="text/javascript">
// //perhatikan, kuncinya adalah disini
//         function fungsiambilkab(nilai){
//            $.ajax({
//                 type: "POST",
//                 url: "<?php echo site_url('jadwal_ctr/lihat_jadwal');?>",
//                 data:"key="+nilai,
//                 success: function(data){
//                     $("#kab").html(data);
//                 },
 
//                 error:function(XMLHttpRequest){
//                     alert(XMLHttpRequest.responseText);
//                 }
 
//             })
 
//         };
// </script>
 
<?php
    echo form_open('#');
    $js = 'onChange="fungsiambilkab(this.value);"';
    echo form_dropdown('provinsi', $lapangan,'', $js);
    echo form_close();
 ?>
</pre>
<div id="kab"></div>
<pre>

</div>
</section>