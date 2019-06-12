
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Nghiệp Đoàn')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($association,['class' => 'form-horizontal','id' => 'association']) ?>
            <div class="form-body">
                <?php
                    $this->Form->templates([
                        'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														アジア国際交流事業協同組合 </span></div>',
                    ]);
                ?>
                <div class="form-group">
                    <?php echo $this->Form->label('name_jp','Tên Nghiệp Đoàn (Tiếng Nhật)', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('name_jp',[
                        'label' => false,
                        'placeholder'=>'Tên Nghiệp Đoàn',
                        'class' => 'form-control input-circle'
                    ]) ?>
                </div>
                <?php
                $this->Form->templates([
                    'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														〒490-1131愛知県海部郡大治町三本木大字西之川17-1-205</span></div>',
                ]);
                ?>

                <?php
                    $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														ASIA KOKUSAI KOURYU JIGYO KYODO KUMIAI </span></div>',
                ]);
                ?>
                <div class="form-group">
                    <?php echo $this->Form->label('name','Tên Nghiệp Đoàn (Tiếng Anh)', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('name',[
                    'label' => false,
                    'placeholder'=>'Tên Nghiệp Đoàn',
                    'class' => 'form-control input-circle'
                    ]) ?>
                </div>
                <?php
                $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														〒490-1131愛知県海部郡大治町三本木大字西之川17-1-205</span></div>',
                ]);
                ?>

                <div class="form-group">
                    <?php echo $this->Form->label('address','Địa Chỉ Nghiệp Đoàn', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('address',[
                        'label' => false,
                        'placeholder'=>'Địa Chỉ Nghiệp Đoàn',
                        'class' => 'form-control input-circle'
                    ]) ?>
                </div>

                <?php
                $this->Form->templates([
                    'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														012-345-6789</span></div>',
                ]);
                ?>
                <div class="form-group">
                    <?php echo $this->Form->label('telephone','Điện Thoại Nghiệp Đoàn', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('telephone',[
                        'label' => false,
                        'placeholder'=>'Điện Thoại Nghiệp Đoàn',
                        'class' => 'form-control input-circle'
                    ]) ?>
                </div>

                <?php
                $this->Form->templates([
                    'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                ]);
                ?>
                <div class="form-group">
                    <?php echo $this->Form->label('kakari','Người Quản Lý Nghiệp Đoàn', ['class' => 'col-md-3 control-label']); ?>
                    <?php echo $this->Form->input('kakari',[
                        'label' => false,
                        'placeholder'=>'Người Quản Lý Nghiệp Đoàn',
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
                        <button type="button" class="btn btn-circle default" onclick="clearData()">Cancel</button>
                    </div>
                </div>
            </div>
        <?= $this->Form->end() ?>

        <!-- END FORM-->
    </div>
</div>
<script>
    function clearData(){
        jQuery('#association').find("input, select, textarea")
                .not(":button, :submit, :reset, :hidden")
                .val("")
                .prop("checked", false)
                .prop("selected", false)
    }

    var associationValid = {
        //入力欄別にルールを作成
        rules:{
            name:{
                required:true

            },
            name_jp:{
                required:true
            },
            kakari : {
                required:true
            }
        },
        messages:{
            name:{
                required: 'Nhập Thông Tin Nghiệp Đoàn Bằng Tiếng Anh'
            },
            name_jp:{
                required: 'Nhập Thông Tin Nghiệp Đoàn Bằng Tiếng Nhật'
            },
            kakari:{
                required: 'Nhập Thông Tin Người Phụ Trách Nghiệp Đoàn'
            }
        }

    };
    jQuery('#association').validate(associationValid);
</script>