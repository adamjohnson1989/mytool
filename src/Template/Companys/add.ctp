
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Công Ty Tiếp Nhận')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($company,['class' => 'form-horizontal']) ?>
        <div class="form-body">
            <?php
            $this->Form->templates([
                'inputContainer' => '<div class="col-md-6">{{content}}<span class="help-block">Ex:
														アジア国際交流事業協同組合 </span></div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Công Ty Tiếp Nhận', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                    'label' => false,
                    'placeholder'=>'Tên Công Ty Tiếp Nhận',
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
                <?php echo $this->Form->label('address','Địa Chỉ Công Ty Tiếp Nhận', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('address',[
                    'label' => false,
                    'placeholder'=>'Địa Chỉ Công Ty Tiếp Nhận',
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
                <?php echo $this->Form->label('telephone','Điện Thoại', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('telephone',[
                    'label' => false,
                    'placeholder'=>'Điện Thoại',
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
                <?php echo $this->Form->input('associations_id', [
                    'options' => $associations,
                    'empty' => '--Chọn Nghiệp Đoàn--',
                    'label' => false,
                    'class' => 'form-control input-circle'
                ]);?>
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
                    <button type="button" class="btn btn-circle default">Cancel</button>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <!-- END FORM-->
    </div>
</div>