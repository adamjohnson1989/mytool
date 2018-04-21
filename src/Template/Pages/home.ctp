
<?php
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - Trang Chủ');
?>
<div class="tab-style-1">
    <?php echo  $this->cell('Recruitment') ?>
</div>
<div class="tab-style-1 new" id="news">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-3" data-toggle="tab">Tin Tức - Sự Kiện</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane row fade in active">
            <?php echo  $this->cell('New::show',[URL_TIN_TUC]) ?>
        </div>
    </div>
</div>
<div class="tab-style-1 new">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-3" data-toggle="tab">Văn Hóa Nhật Bản</a></li>
        <li><a href="#tab-4" data-toggle="tab">Tiếng Nhật</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane row fade in active" id="tab-3">
            <?php echo  $this->cell('New::show',[URL_VAN_HOA]) ?>
        </div>
        <div class="tab-pane row fade" id="tab-4">
            <?php echo  $this->cell('New::show',[URL_TIENG_NHAT]) ?>
        </div>
    </div>
</div>
<div class="tab-style-1 new" id="experience">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-4" data-toggle="tab">Kinh Nghiệm</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane row fade in active">
            <?php echo  $this->cell('New::show',[URL_KINH_NGHIEM]) ?>
        </div>
    </div>
</div>
