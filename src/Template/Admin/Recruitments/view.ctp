<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recruitment $recruitment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recruitment'), ['action' => 'edit', $recruitment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recruitment'), ['action' => 'delete', $recruitment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recruitment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recruitments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recruitment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Creators'), ['controller' => 'Creators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Creator'), ['controller' => 'Creators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recruitments view large-9 medium-8 columns content">
    <h3><?= h($recruitment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($recruitment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kyuryo') ?></th>
            <td><?= h($recruitment->kyuryo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basho') ?></th>
            <td><?= h($recruitment->basho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($recruitment->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($recruitment->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($recruitment->update_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recruitment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nensu') ?></th>
            <td><?= $this->Number->format($recruitment->nensu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Users Id') ?></th>
            <td><?= $this->Number->format($recruitment->users_id) ?></td>
        </tr>
    </table>
</div>
