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
        $this->Html->css(['font-awesome/font-awesome.min.css','simple-line-icons/simple-line-icons.min.css','bootstrap/bootstrap.min.css',
            'uniform/uniform.default.css','bootstrap-switch/bootstrap-switch.min.css',
            'select2/select2.css','components.css',
            'plugins.css','layout.css','themes/darkblue.css','custom.css','bootstrap-switch/bootstrap-switch.min.css',
            'bootstrap-fileinput/bootstrap-fileinput.css','handsontable/handsontable.css','custom-member.css'
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
            echo $this->element('Sidebar/menu');
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
            $this->Html->script(['respond.min.js','excanvas.min.js']);
    ?>
<![endif]-->
<?=
    $this->Html->script(['jquery.min.js','jquery-migrate.min.js','bootstrap/bootstrap.min.js',
        'bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js','jquery-slimscroll/jquery.slimscroll.min.js',
        'jquery.blockui.min.js','jquery.cokie.min.js','uniform/jquery.uniform.min.js','bootstrap-switch/bootstrap-switch.min.js',
        'jquery-validation/jquery.validate.min.js','jquery-validation/additional-methods.min.js',
        'bootstrap-wizard/jquery.bootstrap.wizard.min.js','handsontable/handsontable.min.js','select2/select2.min',
        'metronic.js','layout.js','quick-sidebar.js','demo.js','pages/form-wizard.js',
        'bootstrap-fileinput/bootstrap-fileinput.js'
    ]);
?>
<?= $this->fetch('script') ?>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        FormWizard.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>