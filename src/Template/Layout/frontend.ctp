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
    <meta name="description" content="Xuất Khẩu Lao Động, Xuất Khẩu Lao Động Nhật Bản, Uy Tín " />
    <meta name="keywords" content="Xuất Khẩu Lao Động, Nhật Bản, XKLD, Uy Tín, Không Mô Giới, Kinh Nghiệm Sống Ở Nhật Bản,
    Tin Tức, Sự Kiện, XKLD Nhật Bản, Văn Hóa Nhật Bản, Tiếng Nhật, Chi Phí Minh Bạch
    " />
    <meta content="" name="author"/>

    <!-- BEGIN GLOBAL STYLES -->
    <?=
        $this->Html->css(['animate.css','bootstrap/bootstrap.min.css','carousel/carousel.css','components.css','slider.css',
                            'corporate/style.css','corporate/style-responsive.css','corporate/themes/red.css','corporate/custom.css'
                        ]);
    ?>
    <!-- END GLOBAL STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>

    <?= $this->fetch('css') ?>
    <?= $this->Html->meta('icon') ?>
</head>
<!-- BEGIN BODY -->
<body class="corporate">

<!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <?php
                $this->start('header');
                echo $this->element('header');
                $this->end();
            ?>
            <?php if($this->fetch('header')):?>
            <?= $this->fetch('header') ?>
            <?php endif;?>
        </div>
    </div>
<!-- END HEADER -->

<!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
        <?php
            $this->start('slider');
        echo $this->element('slider');
        $this->end();
        ?>
        <?php if($this->fetch('slider')):?>
        <?= $this->fetch('slider') ?>
        <?php endif;?>
    </div>
<!-- END SLIDER -->

<div class="main">
    <div class="container">
        <div class="row margin-bottom-40">
            <div class="col-md-8 col-sm-8">
                <div class="content-page">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
            <!-- Side bar-->
            <div class="sidebar col-md-4 col-sm-4">
                <?php
                $this->start('sidebar');
                echo $this->element('sidebar');
                $this->end();
                ?>
                <?php if($this->fetch('sidebar')):?>
                <?= $this->fetch('sidebar') ?>
                <?php endif;?>
            </div>
            <!--Side Bar-->
        </div>
    </div>
</div>


<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <?php
        $this->start('footer');
        echo $this->element('footer');
        $this->end();
        ?>
        <?php if($this->fetch('footer')):?>
        <?= $this->fetch('footer') ?>
        <?php endif;?>
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
                         'carousel/owl.carousel.min.js','corporate/layout.js','pages/bs-carousel.js'
                        ]);
?>

<?= $this->fetch('script') ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initFacebook();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>