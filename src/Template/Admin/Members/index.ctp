<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>

<div class="row" id="member">

    <!-- END PAGE HEADER-->
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Danh Sách Thực Tập Sinh
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
                                ['controller' => 'Members','action' => 'add'],
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
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Ảnh') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Tên') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Ngày sinh') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Quê Quán') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Công Ty') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= $this->Number->format($member->id) ?></td>
                            <td><?= h($member->image) ?></td>
                            <td><?= h($member->name) ?></td>
                            <td><?= h($member->birthday) ?></td>
                            <td><?= h($member->kokyo) ?></td>
                            <td><?= $member->has('company') ? $this->Html->link($member->company->name, ['controller' => 'Companys', 'action' => 'view', $member->company->id]) : '' ?></td>
                            <td><?= $this->Number->format($member->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(
                                $this->Html->tag('i','',['class' => 'fa fa-file-o']),
                                ['action' => 'view', $association->id],
                                ['class' => 'btn btn-icon-only btn-circle blue', 'escape' => false]
                                )
                                ?>
                                <?= $this->Html->link(
                                $this->Html->tag('i','',['class' => 'fa fa-edit']),
                                ['action' => 'edit', $association->id],
                                ['class' => 'btn btn-icon-only btn-circle purple', 'escape' => false]
                                )
                                ?>
                                <?= $this->Form->postLink(
                                $this->Html->tag('i','',['class' => 'fa fa-times']),
                                ['action' => 'delete', $association->id],
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
