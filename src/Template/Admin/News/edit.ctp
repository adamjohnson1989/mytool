<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Tin Tức')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($new,['class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) ?>
        <div class="form-body">
            <?php
                    $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Tin Tức', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                'label' => false,
                'placeholder'=>'Tên Tin Tức',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('categories_id','Category', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'categories_id',
                    $catData,
                    ['default' => $new->categories_id,'class' => 'form-control input-circle']
                    );
                    ?>
                </div>
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
            <div class="form-group last">
                <label class="control-label col-md-3">Hình Ảnh Đại Diện</label>
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <?php if($new->thumb):?>
                             <img src="<?= $new->thumb ?>" alt=""/>
                            <?php else: ?>
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                            <?php endif;?>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                        </div>
                        <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="file_upload">
													</span>
                            <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                Remove </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-9">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('short_desc','Short Description', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('short_desc',[
                'type' => 'textarea',
                'label' => false,
                'placeholder'=>'Short Description',
                'class' => 'edittextarea form-control',
                'id'  => 'short_desc'
                ]) ?>
            </div>
            <!-- Nội Dung Tin Tức-->
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-9">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('description','Nội Dung Tin Tức', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('description',[
                'type' => 'textarea',
                'label' => false,
                'placeholder'=>'Nội Dung Công Việc',
                'class' => 'edittextarea form-control',
                'id'  => 'description',
                'value' => htmlspecialchars_decode($new->description)
                ]) ?>
            </div>
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('status','Trạng Thái', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'status',
                    ['0' => 'No Active', '1' => 'Active'],
                    ['default' => '1','class' => 'form-control input-circle']
                    );
                    ?>
                </div>
            </div>

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
        selector: "#description",
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
        height:600,
        // without images_upload_url set, Upload tab won't show up
        automatic_uploads : false,
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/admin/news/imgupload');
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