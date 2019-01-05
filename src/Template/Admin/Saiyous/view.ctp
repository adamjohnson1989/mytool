<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saiyous $saiyous
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Saiyous'), ['action' => 'edit', $saiyous->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Saiyous'), ['action' => 'delete', $saiyous->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saiyous->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Saiyous'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Saiyous'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companys'), ['controller' => 'Companys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Associations'), ['controller' => 'Associations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Association'), ['controller' => 'Associations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="saiyous view large-9 medium-8 columns content">
    <h3><?= h($saiyous->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($saiyous->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $saiyous->has('company') ? $this->Html->link($saiyous->company->name, ['controller' => 'Companys', 'action' => 'view', $saiyous->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Association') ?></th>
            <td><?= $saiyous->has('association') ? $this->Html->link($saiyous->association->name, ['controller' => 'Associations', 'action' => 'view', $saiyous->association->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Interview Date') ?></th>
            <td><?= h($saiyous->interview_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member') ?></th>
            <td><?= h($saiyous->member) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($saiyous->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($saiyous->status) ?></td>
        </tr>
    </table>
</div>
