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
        <?= $this->Form->create($recruitment,['class' => 'form-horizontal','id' => 'recruitments']) ?>
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
														MS-18001/TTS</span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('sku','Mã Đơn Hàng', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('sku',[
                'label' => false,
                'placeholder'=>'MS-18001/TTS',
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
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('associations_id','Nghiệp Đoàn', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'associations_id',
                    ['0' => '-- Chọn Nghiệp Đoàn --'],
                    ['default' => '0','class' => 'form-control input-circle', 'id' => 'associations_id']
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
                <?php echo $this->Form->label('companys_id','Xí Nghiệp', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'companys_id',
                    array('0' => '-- Chọn Xí Nghiệp --'),
                    ['default' => '0','class' => 'form-control input-circle', 'id' => 'companys_id']
                    );
                    ?>
                </div>
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
                <label class="control-label col-md-3">Thời Gian Thi Tuyển</label>
                <div class="col-md-6">
                    <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-date-start-date="+0d">
                        <input type="text" name="deadline" class="form-control input-circle" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                    </div>
                </div>
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
                'id'  => 'description'
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
    $('.date-picker').datepicker();
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
        height:600,
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
    //associations_id

    var assoData = '<?= json_encode($catData) ?>';
    var assoAry = jQuery.parseJSON(assoData);
    console.log(assoAry);
    for (var i = 0; i < assoAry.length; i++) {
        jQuery('#associations_id').append("<option value='" + assoAry[i].id  + "'>" + assoAry[i].name + "</option>");
    }

    $('#associations_id').on('change', function() {
        var idx = this.value;
        $('#companys_id').children('option:not(:first)').remove();
        for (var i = 0; i < assoAry.length; i++) {
            if(assoAry[i].id == idx){
                var comAry= assoAry[i].companys;
                for(var j = 0; j < comAry.length; j++) {
                    jQuery('#companys_id').append("<option value='" + comAry[j].id  + "'>" + comAry[j].name + "</option>");
                }
                break;
            }

        }
    });
    var memberValid = {
        rules:{
            name:{
                required:true
            },
            basho:{
                required:true
            },
            associations_id : {
                required:true
            },
            companys_id:{
                required:true,
                number: true
            },
            kyuryo:{
                required:true
            },
            nensu:{
                required:true,
                number: true
            },
            deadline:{
                required:true
            },
            sku:{
                required:true
            }
        }
    };
    jQuery('#recruitments').validate(memberValid);
</script>