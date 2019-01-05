<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saiyous $saiyous
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $saiyous->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $saiyous->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Saiyous'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companys'), ['controller' => 'Companys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Associations'), ['controller' => 'Associations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Association'), ['controller' => 'Associations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="saiyous form large-9 medium-8 columns content">
    <?= $this->Form->create($saiyous) ?>
    <fieldset>
        <legend><?= __('Edit Saiyous') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('companys_id', ['options' => $companys]);
            echo $this->Form->control('associations_id', ['options' => $associations]);
            echo $this->Form->control('interview_date');
            echo $this->Form->control('member');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
