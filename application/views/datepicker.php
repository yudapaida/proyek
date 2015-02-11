<body>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap/js/development-bundle/themes/ui-lightness/ui.all.css');?>" />
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/jquery-1.8.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/ui.core.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/ui.datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/development-bundle/ui/i18n/ui.datepicker-id.js');?>"></script>
    <script type="text/javascript">
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
    $data = array(
        'id' => 'tglbooking',
        'type' => 'text'
        );
    echo form_input($data);
    echo form_close();
    ?>
</body>