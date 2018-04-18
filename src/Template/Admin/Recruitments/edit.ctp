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
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('url','URL Hiển Thị', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('url',[
                'label' => false,
                'placeholder'=>'URL Hiển Thị',
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

            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block"></span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('type','Loại Hình', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'type',
                    ['0' => 'Thực Tập Sinh', '1' => 'Kỹ Thuật Viên'],
                    ['default' => '0','class' => 'form-control input-circle']
                    );
                    ?>
                </div>
            </div>

            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block"></span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('deadline','Thời Gian Thi Tuyển', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('deadline',[
                'label' => false,
                'placeholder'=>'Thời Gian Thi Tuyển',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <!-- Nội Dung Công Việc-->

            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-9">{{content}}</div>',
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
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image',
        content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'],
        paste_data_images: true,
        height:500,
        // without images_upload_url set, Upload tab won't show up
        automatic_uploads : false,
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/admin/recruitments/imgupload');
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = jQuery.parseJSON(xhr.responseText);
                if (!json || typeof json.file_path != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.file_path);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        }
    });
</script>