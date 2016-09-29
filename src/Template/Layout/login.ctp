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
    <title>Login Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <?=
        $this->Html->css(['font-awesome/font-awesome.min.css','simple-line-icons/simple-line-icons.min.css','bootstrap/bootstrap.min.css',
            'components.css','login.css',
            'plugins.css','layout.css','themes/darkblue.css','custom.css'
        ]);
    ?>
    <!-- END GLOBAL STYLES -->
    <?= $this->fetch('css') ?>
    <?= $this->Html->meta('icon') ?>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <?php
        echo $this->Html->link( $this->Html->image('login.png',array('width' => 200, 'height' => 150)), array('controller'=>'users','action'=>'login'), array('escape' => false));
    ?>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <?= $this->fetch('content') ?>
</div>
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
    <?=
        $this->Html->script(['respond.min.js','excanvas.min.js']);
    ?>
<![endif]-->
    <?=
        $this->Html->script(['jquery.min.js','jquery-migrate.min.js','bootstrap/bootstrap.min.js',
            'jquery.blockui.min.js','jquery.cokie.min.js','uniform/jquery.uniform.min.js','jquery-validation/jquery.validate.min.js',
            'metronic.js','layout.js','login.js','demo.js'
        ]);
    ?>
    <?= $this->fetch('script') ?>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Login.init();
            Demo.init();
        });
    </script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>