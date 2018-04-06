<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Đơn Hàng')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($recruitment,['class' => 'form-horizontal']) ?>
        <div class="form-body">
            <?php
                    $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Đơn Hàng', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                'label' => false,
                'placeholder'=>'Tên Đơn Hàng',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														Osaka, Kyoto</span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('basho','Địa Điểm Làm Việc', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('basho',[
                'label' => false,
                'placeholder'=>'Địa Điểm Làm Việc',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>

            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														Lương cơ bản</span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('kyuryo','Lương Cơ Bản', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('kyuryo',[
                'label' => false,
                'placeholder'=>'Lương Cơ Bản',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <!-- số năm làm việc-->
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														Nếu Là 3 năm thì điền 3</span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('nensu','Số Năm Làm Việc', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('nensu',[
                'label' => false,
                'placeholder'=>'Số Năm Làm Việc',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <!-- Nội Dung Công Việc-->
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('description','Nội Dung Đơn Hàng', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('description',[
                'type' => 'textarea',
                'label' => false,
                'placeholder'=>'Nội Dung Công Việc',
                'class' => 'edittextarea form-control',
                'id'  => 'description',
                'value' => htmlspecialchars_decode($recruitment->description)
                ]) ?>
            </div>
            <input name="image" type="file" id="upload" class="hidden" onchange="">

        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-circle blue']) ?>
                    <button type="button" class="btn btn-circle default">Cancel</button>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <!-- END FORM-->
    </div>
</div>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        paste_data_images: true,
        height:600,
        // without images_upload_url set, Upload tab won't show up
        images_upload_url: 'upload.php',
        plugins: 'uploadimage',
        toolbar: 'uploadimage'
    });
</script>