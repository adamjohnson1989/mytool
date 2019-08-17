<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-users"></i><?php echo __('Chỉnh sửa Thông Tin Bộ Phận')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($department,['class' => 'form-horizontal','id' => 'department']) ?>
        <div class="form-body">
            <?php
            $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Bộ Phận', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                    'label' => false,
                    'placeholder'=>'Tên Bộ Phận',
                    'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <?php
            $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php
                    $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                ]);
                ?>
                <div class="form-group">
                    <?php echo $this->Form->label('email','Email', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('email',[
                    'label' => false,
                    'placeholder'=>'Email',
                    'class' => 'form-control input-circle'
                    ]) ?>
                </div>
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
        jQuery('#department').find("input, select, textarea")
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
            email:{
                required:true,
                email: true
            }
        },
        messages:{
            name:{
                required: 'Nhập Thông Tin Bộ Phận'
            },
            email:{
                required: 'Nhập Thông Tin Email'
            }
        }

    };
    jQuery('#department').validate(companyValid);
</script>