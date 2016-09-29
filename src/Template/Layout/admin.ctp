<!DOCTYPE html>
<!--
Version: 1.0
Author: Son Nguyen
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title><?= $this->fetch('title') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <?=
        $this->Html->css(['font-awesome.min.css','simple-line-icons/simple-line-icons.min.css','bootstrap/bootstrap.min.css',
            'uniform/uniform.default.css','bootstrap-switch/bootstrap-switch.min.css','bootstrap-daterangepicker/daterangepicker-bs3.css',
            'fullcalendar/fullcalendar.min.css','jqvmap/jqvmap/jqvmap.css','pages/tasks.css','components.css',
            'plugins.css','layout.css','themes/darkblue.css','custom.css'
        ]);
    ?>
    <!-- END GLOBAL STYLES -->
    <?= $this->fetch('css') ?>
    <?= $this->Html->meta('icon') ?>
</head>
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-style-square">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
<!-- BEGIN HEADER INNER -->
    <?php
        $this->start('header');
        echo $this->element('header');
        $this->end();
    ?>
    <?php if($this->fetch('header')):?>
        <?= $this->fetch('header') ?>
    <?php endif;?>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <?php
            $this->start('sidebar');
            echo $this->element('sidebar/menu');
            $this->end();
        ?>
        <?php if($this->fetch('sidebar')):?>
            <?= $this->fetch('sidebar') ?>
        <?php endif;?>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
    <?=
            $this->Html->script('respond.min.js','excanvas.min.js');
            $this->Html->script('/admin/js/respond.min.js');
    ?>
<![endif]-->
<?=
    $this->Html->script(['jquery.min.js','jquery-migrate.min.js','jquery-ui/jquery-ui.min.js','bootstrap/bootstrap.min.js',
        'bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js','jquery-slimscroll/jquery.slimscroll.min.js',
        'jquery.blockui.min.js','jquery.cokie.min.js','uniform/jquery.uniform.min.js','bootstrap-switch/bootstrap-switch.min.js',
        'jqvmap/jqvmap/jquery.vmap.js','jqvmap/jqvmap/maps/jquery.vmap.russia.js','jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'jqvmap/jqvmap/maps/jquery.vmap.europe.js','jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'jqvmap/jqvmap/maps/jquery.vmap.usa.js','jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'flot/jquery.flot.min.js','flot/jquery.flot.resize.min.js','flot/jquery.flot.categories.min.js',
        'jquery.pulsate.min.js','bootstrap-daterangepicker/moment.min.js','bootstrap-daterangepicker/daterangepicker.js',
        'fullcalendar/fullcalendar.min.js','jquery-easypiechart/jquery.easypiechart.min.js',
        'jquery.sparkline.min.js','metronic.js','layout.js','quick-sidebar.js'
    ]);
?>
<?= $this->fetch('script') ?>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>