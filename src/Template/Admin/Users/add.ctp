
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin User')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($user,['class' => 'form-horizontal']) ?>
        <div class="form-body">
            <?php
                    $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('email','UserName', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('email',[
                'label' => false,
                'placeholder'=>'UserName',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>

            <?php
                    $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('password','Password', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('password',[
                'label' => false,
                'placeholder'=>'Password',
                'class' => 'form-control input-circle'
                ]) ?>
            </div>
            <?php
                $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('role','Phân Quyền', ['class' => 'col-md-3 control-label']); ?>
                <div class="col-md-6">
                    <?php
                    echo $this->Form->select(
                        'role',
                        ['0' => 'Admin', '1' => 'Mode', '2' => 'Editor'],
                        ['empty' => '-- Chọn Quyền --','class' => 'form-control input-circle']
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