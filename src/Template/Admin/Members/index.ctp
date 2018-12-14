<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>

<div class="row" id="list-member">

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
                        <th scope="col"><?= __('ID') ?></th>
                        <th scope="col"><?= __('Mã Học Viên') ?></th>
                        <th scope="col"><?= __('Họ Tên') ?></th>
                        <th scope="col"><?= __('Hình Ảnh') ?></th>
                        <th scope="col"><?= __('Ngày sinh') ?></th>
                        <th scope="col"><?= __('Quê Quán') ?></th>
                        <th scope="col"><?= __('Trạng Thái') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $member): ?>
                        <tr>
                            <td><?= $this->Number->format($member->id) ?></td>
                            <td><?= $this->Number->format($member->my_number) ?></td>
                            <td><?= h($member->name) ?></td>
                            <td><img src="<?= h($member->image) ?>" alt="" class="border_radius" style="max-width: 75px; max-height: 75px"/></td>
                            <td><?= h($member->birthday) ?></td>
                            <td><?= h($member->kokyo) ?></td>
                            <td><?= $this->Number->format($member->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(
                                $this->Html->tag('i','',['class' => 'fa fa-file-o']),
                                ['action' => 'view', $member->id],
                                ['class' => 'btn btn-icon-only btn-circle blue', 'escape' => false,'title' => 'Xem Chi Tiết']
                                )
                                ?>
                                <?= $this->Html->link(
                                $this->Html->tag('i','',['class' => 'fa fa-edit']),
                                ['action' => 'edit', $member->id],
                                ['class' => 'btn btn-icon-only btn-circle purple', 'escape' => false,'title' => 'Chỉnh Sửa Thông Tin']
                                )
                                ?>
                                <?= $this->Form->postLink(
                                $this->Html->tag('i','',['class' => 'fa fa-times']),
                                ['action' => 'delete', $member->id],
                                [
                                'confirm' => __('Sau Khi Xóa Sẽ Không Khôi Phục Được Dữ Liệu. Bạn Có Muốn Xóa Không?'),
                                'class' => 'btn btn-icon-only btn-circle red', 'escape' => false,'title' => 'Xóa Dữ Liệu'
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
