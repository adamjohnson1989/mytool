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
                    <i class="fa fa-globe"></i>Danh Sách User
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
                                ['controller' => 'Users','action' => 'add'],
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
                        <th scope="col"><?=  __('UserName') ?></th>
                        <th scope="col"><?= __('Role') ?></th>
                        <th scope="col"><?= __('Tools') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr class="odd gradeX">
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td>
                            <?php
                                if($user->role == AUTH_ALL) {
                                    echo 'Admin';
                                }else if($user->role == AUTH_MODE){
                                    echo 'Mode';
                                }else{
                                    echo 'Editor';
                                }
                            ?>
                        </td>
                        <td class="actions">
                            <?= $this->Form->postLink(
                            $this->Html->tag('i','',['class' => 'fa fa-times']),
                            ['action' => 'delete', $user->id],
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

