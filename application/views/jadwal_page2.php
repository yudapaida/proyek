<!DOCTYPE html>

<!-- MENU UTAMA
======================================================================================================================== -->
<section id="mainBody">
<div class="container">
<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap/js/development-bundle/themes/ui-lightness/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>

<script type="text/javascript">
//perhatikan, kuncinya adalah disini
        function fungsiambilkab(nilai){
           $.ajax({
                type: "POST",
                url: "<?php echo site_url('jadwal_ctr/lihat_lap');?>",
                data:"key="+nilai,
                success: function(data){
                    $("#kab").html(data);
                },
 
                error:function(XMLHttpRequest){
                    alert(XMLHttpRequest.responseText);
                }
 
            })
 
        };

         $(function(){
            $("#tglbooking").datepicker({
                dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true
            });
        });
</script>   
<?php
    echo form_open('#');
    $js = 'onChange="fungsiambilkab(this.value);"';
    echo form_dropdown('provinsi', $lapangan,'', $js);
    $data = array(
        'id' => 'tglbooking',
        'type' => 'text',
        'name' =>'tgl_booking',
        'placeholder' => 'Pilih Tanggal'
        );
    echo form_input($data);
    echo form_close();
 ?>
</pre>
<div id="kab"></div>


</div>
</section>