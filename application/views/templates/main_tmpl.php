<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $site_info['title']?></title>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="author" content=" Rashida Sultana">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!--<CSS>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/font-awesome.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/ionicons.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/AdminLTE.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/skins/_all-skins.css">

        <!--<Date picker css>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/superadmin/zebra_datePicker.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/superadmin/zebra_datePicker_custom.css" type="text/css">


        <!--<NAV Bar JS>-->
        <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url(); ?>resources/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>


        <script src="<?php echo base_url(); ?>resources/js/app.min.js"></script>
        <!--<Date picker js>-->
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/superadmin/zebra_datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/superadmin/zebra_datepicker_core.js"></script>
        <!--<angular>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-animate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-file-upload.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/csv_file_dependencies/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/csv_file_dependencies/ng-csv.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/image-crop.js"></script>
        <!--<angular Services>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularService/memberService.js"></script>
        <!--<angular Controller>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/memberController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/imageCropController.js"></script>

        <!--<angular Apps>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularApp/memberApp.js"></script>

    </head>
    <body>
        <div id="wrap">

            <!-- Fixed navbar -->
            <?php $this->load->view('templates/sections/header'); ?>
            <!--<div class="clrGap">&nbsp;</div>-->
            <div class="container-fluid mybody">
                <?php $this->load->view('templates/sections/left_pane'); ?>
                <div class="main">
                    <?php echo $contents; ?>
                </div>
                <div class="ieclear">&nbsp;</div>
            </div>
        </div><!--/end Wrap-->
        <?php $this->load->view('templates/sections/footer'); ?>
    </body>
</html>
