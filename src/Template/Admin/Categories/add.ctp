<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Category')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($category,['class' => 'form-horizontal']) ?>
        <div class="form-body">
            <?php
                    $this->Form->templates([
            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
            ]);
            ?>
            <div class="form-group">
                <?php echo $this->Form->label('name','Tên Category', ['class' => 'col-md-3 control-label']); ?>
                <?php echo $this->Form->input('name',[
                'label' => false,
                'placeholder'=>'Tên Category',
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
