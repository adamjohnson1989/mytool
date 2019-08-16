<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-diamond"></i><?php echo __('Dự Định Sau Khi Về Nước')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($kikokukibou,['class' => 'form-horizontal','id' => 'kikokukibou']) ?>
        <div class="form-body">
            <?php
            $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Dự Định Sau Khi Về Nước (VN)', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                    'label' => false,
                    'placeholder'=>'Dự Định Sau Khi Về Nước (VN)',
                    'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <?php
            $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name_jp','Dự Định Sau Khi Về Nước (JP)', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name_jp',[
                    'label' => false,
                    'placeholder'=>'Dự Định Sau Khi Về Nước (JP)',
                    'class' => 'form-control input-circle'
                ]) ?>
            </div>

            <div class="form-group">
                <?php echo $this->Form->label('status','Trạng Thái', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('status',[
                    'label' => false,
                    'class' => 'make-switch',
                    'type'  => 'checkbox',
                    'checked data-on-color' => 'success',
                    'data-off-color' => 'warning'
                ]) ?>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-circle blue']) ?>
                    <button type="button" class="btn btn-circle default" onclick="clearData();">Cancel</button>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <!-- END FORM-->
    </div>
</div>

<script>
    function clearData(){
        jQuery('#kikokukibou').find("input, select, textarea")
                .not(":button, :submit, :reset, :hidden")
                .val("")
                .prop("checked", false)
                .prop("selected", false)
    }

    var companyValid = {
        //入力欄別にルールを作成
        rules:{
            name:{
                required:true

            },
            name_jp:{
                required:true
            }
        },
        messages:{
            name:{
                required: 'Nhập Thông Tin Bằng Tiếng Việt'
            },
            name_jp:{
                required: 'Nhập Thông Tin Bằng Tiếng Nhật'
            }
        }

    };
    jQuery('#kikokukibou').validate(companyValid);
</script>