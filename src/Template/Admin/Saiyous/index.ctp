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
                    <i class="fa fa-globe"></i>Danh Sách Đơn Hàng
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
                                ['controller' => 'Saiyous','action' => 'add'],
                                ['class'=>'btn green','role' => 'button','escape' => false]
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

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

