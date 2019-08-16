
<div class="row" id="company">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        Dashboard <small>reports & statistics</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Danh Sách Nghề Nghiệp
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <?php
                                echo $this->Html->link(
                                    "Add New ".$this->Html->tag('i', '',
                                        array('class' => 'fa fa-plus')
                                    ),
                                    ['controller' => 'Shokugyous','action' => 'add'],
                                    ['class'=>'btn green','role' => 'button','escape' => false]
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="sample_1">
                    <thead>
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?=  __('Ngành Nghề (VN)') ?></th>
                        <th scope="col"><?= __('Ngành Nghề (JP)') ?></th>
                        <th scope="col"><?= __('Trạng Thái') ?></th>
                        <th scope="col"><?= __('Tools') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($shokugyous as $shokugyou): ?>
                        <tr class="odd gradeX">
                            <td><?= $this->Number->format($shokugyou->id) ?></td>
                            <td><?= h($shokugyou->name) ?></td>
                            <td><?= h($shokugyou->name_jp) ?></td>
                            <td>
                                <?php if($this->Number->format($shokugyou->status) == 1):?>
                                    <button type="button" class="btn btn-circle green">Enable</button>
                                <?php else: ?>
                                    <button type="button" class="btn btn-circle red">Disable</button>
                                <?php endif;?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(
                                    $this->Html->tag('i','',['class' => 'fa fa-file-o']),
                                    ['action' => 'view', $shokugyou->id],
                                    ['class' => 'btn btn-icon-only btn-circle blue', 'escape' => false]
                                )
                                ?>
                                <?= $this->Html->link(
                                    $this->Html->tag('i','',['class' => 'fa fa-edit']),
                                    ['action' => 'edit', $shokugyou->id],
                                    ['class' => 'btn btn-icon-only btn-circle purple', 'escape' => false]
                                )
                                ?>
                                <?= $this->Form->postLink(
                                    $this->Html->tag('i','',['class' => 'fa fa-times']),
                                    ['action' => 'delete', $shokugyou->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete'),
                                        'class' => 'btn btn-icon-only btn-circle red', 'escape' => false
                                    ]
                                )
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="paginator" id="pg_custom">
                <ul class="btn-toolbar">
                    <?= $this->Paginator->prev('< ' . __('Prev')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
