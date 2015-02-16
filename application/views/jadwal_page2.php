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
        function fungsiambilkab(){
            var tgl=$("#tglbooking").datepicker({ dateFormat: 'yy-mm-dd' }).val();
            var id_lap=$("#nama_lap option:selected").val();

            // alert(data);
           $.ajax({
                type: "POST",
                url: "<?php echo site_url('jadwal_ctr/lihat_lap');?>",
                data:{tgl:tgl,
                      id:id_lap},
                datatype:'json',
                success: function(data){
                    $("#kab").html(data);
                },
 
                error:function(XMLHttpRequest){
                    alert(XMLHttpRequest.responseText);
                }
            })
        };         
</script> 
<script type="text/javascript">
    $(function(){
            $("#tglbooking").datepicker({
                dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true,
                yearRange : '-50:+50'
            });
        });

</script>

<form action="#">
    <?php
    $data = array(
        'id' => 'tglbooking',
        'name' => 'tgl_booking',
        'placeholder' => 'Pilih Tanggal'
        );

    echo form_input($data);
    echo " ";
    // $js = 'onChange="fungsiambilkab(this.value);"';
    $js = 'id="nama_lap" onChange=""';
    echo form_dropdown('nama_lap', $lapangan,'',$js);
    ?>
    <input type="button" value="tombol" onclick="fungsiambilkab();" />
 </form>
</pre>
<div id="kab"> </div>


</div>
</section>