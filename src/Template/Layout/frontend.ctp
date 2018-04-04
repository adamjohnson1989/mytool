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
                            'fancybox/fancybox.css','carousel/carousel.css','pages/components.css','pages/slider.css',
                            'corporate/style.css','corporate/style-responsive.css','corporate/themes/red.css','corporate/custom.css'
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
    $this->Html->script(['jquery.min.js','jquery-migrate.min.js','jquery-ui/jquery-ui.min.js','bootstrap/bootstrap.min.js',
                         'fancybox/jquery.fancybox.pack.js','carousel/owl.carousel.min.js','corporate/layout.js','pages/bs-carousel.js'
                        ]);
?>
<?= $this->fetch('script') ?>
<script>
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>