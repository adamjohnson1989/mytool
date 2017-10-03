<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companys'), ['controller' => 'Companys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companys', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($member->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($member->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kokyo') ?></th>
            <td><?= h($member->kokyo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($member->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $member->has('company') ? $this->Html->link($member->company->name, ['controller' => 'Companys', 'action' => 'view', $member->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shincho') ?></th>
            <td><?= h($member->shincho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taiju') ?></th>
            <td><?= h($member->taiju) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iq') ?></th>
            <td><?= h($member->iq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($member->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kekkon') ?></th>
            <td><?= $this->Number->format($member->kekkon) ?></td>
        </tr>
    </table>
</div>
