
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-user-circle"></i><?php echo __('Thêm Thông Tin Nhân Viên Mới')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($shain,['class' => 'form-horizontal', 'id' => 'shain']) ?>
        <div class="form-body">
            <?php
            $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Nhân Viên', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                    'label' => false,
                    'placeholder'=>'Tên Nhân Viên',
                    'class' => 'form-control input-circle'
                ]) ?>
            </div>

            <?php
                $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                ]);
            ?>

            <div class="form-group">
                <?php echo $this->Form->label('tel','Số Điện Thoại', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('tel',[
                'label' => false,
                'placeholder'=>'Số Điện Thoại',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>

            <?php
                $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                ]);
            ?>
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

            <?php
                    $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('departments_id','Bộ Phận', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                    'departments_id',
                    $catData,
                    ['default' => '0','class' => 'form-control input-circle']
                    );
                    ?>
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
        jQuery('#shain').find("input, select, textarea")
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
            },
            tel:{
                required:true,
                number:true
            },
            departments_id:{
                required:true
            }
        },
        messages:{
            name:{
                required: 'Nhập Tên Nhân Viên'
            },
            email:{
                required: 'Nhập Thông Tin Email Nhân Viên'
            },
            tel:{
                required: 'Nhập Số Điện Thoại Nhân Viên'
            }
        }

    };
    jQuery('#shain').validate(companyValid);
</script>