<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Association'), ['action' => 'edit', $association->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Association'), ['action' => 'delete', $association->id], ['confirm' => __('Are you sure you want to delete # {0}?', $association->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Associations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Association'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="associations view large-9 medium-8 columns content">
    <h3><?= h($association->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($association->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Jp') ?></th>
            <td><?= h($association->name_jp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($association->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Jp') ?></th>
            <td><?= h($association->address_jp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kakari') ?></th>
            <td><?= h($association->kakari) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($association->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($association->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($association->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($association->modified) ?></td>
        </tr>
    </table>
</div>
