<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recruitment[]|\Cake\Collection\CollectionInterface $recruitments
 */
?>

<div class="row" id="association">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Danh Sách Đơn Hàng Tuyển Dụng
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->Flash->render() ?>
                    </div>
                </div>
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <?php
                                    echo $this->Html->link(
                                "Add New ".$this->Html->tag('i', '',
                                array('class' => 'fa fa-plus')
                                ),
                                ['controller' => 'Recruitments','action' => 'add'],
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
                        <th scope="col"><?=  __('Tên Đơn Hàng') ?></th>
                        <th scope="col"><?= __('Địa Chỉ') ?></th>
                        <th scope="col"><?= __('Số Năm') ?></th>
                        <th scope="col"><?= __('Tools') ?></th>
                        <th scope="col"><?= __('Người Tạo') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($recruitments as $recruitment): ?>
                    <tr class="odd gradeX">
                        <td><?= $this->Number->format($recruitment->id) ?></td>
                        <td><?= h($recruitment->name) ?></td>
                        <td><?= h($recruitment->basho) ?></td>
                        <td><?= $this->Number->format($recruitment->nensu) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(
                            $this->Html->tag('i','',['class' => 'fa fa-file-o']),
                            ['action' => 'view', $recruitment->id],
                            ['class' => 'btn btn-icon-only btn-circle blue', 'escape' => false]
                            )
                            ?>
                            <?= $this->Html->link(
                            $this->Html->tag('i','',['class' => 'fa fa-edit']),
                            ['action' => 'edit', $recruitment->id],
                            ['class' => 'btn btn-icon-only btn-circle purple', 'escape' => false]
                            )
                            ?>
                            <?= $this->Form->postLink(
                            $this->Html->tag('i','',['class' => 'fa fa-times']),
                            ['action' => 'delete', $recruitment->id],
                            [
                            'confirm' => __('Are you sure you want to delete'),
                            'class' => 'btn btn-icon-only btn-circle red', 'escape' => false
                            ]
                            )
                            ?>
                        </td>
                        <td><?= $recruitment->user ? $recruitment->user->email : Null ?></td>
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

