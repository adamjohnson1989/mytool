<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $news->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Edit News') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('desc');
            echo $this->Form->control('thumb');
            echo $this->Form->control('created_at');
            echo $this->Form->control('update_at', ['empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('tag');
            echo $this->Form->control('cat_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
