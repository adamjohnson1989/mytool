<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($news->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thumb') ?></th>
            <td><?= h($news->thumb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($news->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $news->has('user') ? $this->Html->link($news->user->id, ['controller' => 'Users', 'action' => 'view', $news->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= h($news->tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cat Id') ?></th>
            <td><?= $this->Number->format($news->cat_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($news->update_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($news->desc)); ?>
    </div>
</div>
