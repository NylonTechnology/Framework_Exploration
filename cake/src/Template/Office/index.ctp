<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Office'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="office index large-9 medium-8 columns content">
    <h3><?= __('Office') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('value_statement') ?></th>
                <th><?= $this->Paginator->sort('building') ?></th>
                <th><?= $this->Paginator->sort('address_1') ?></th>
                <th><?= $this->Paginator->sort('address_2') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('province') ?></th>
                <th><?= $this->Paginator->sort('zip') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('delivery_address_1') ?></th>
                <th><?= $this->Paginator->sort('delivery_address_2') ?></th>
                <th><?= $this->Paginator->sort('delivery_city') ?></th>
                <th><?= $this->Paginator->sort('delivery_state') ?></th>
                <th><?= $this->Paginator->sort('delivery_province') ?></th>
                <th><?= $this->Paginator->sort('delivery_zip') ?></th>
                <th><?= $this->Paginator->sort('delivery_country') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('fax') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('directions_url') ?></th>
                <th><?= $this->Paginator->sort('sort') ?></th>
                <th><?= $this->Paginator->sort('display_status_id') ?></th>
                <th><?= $this->Paginator->sort('date_updated') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th><?= $this->Paginator->sort('migrated_OfficeID') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($office as $office): ?>
            <tr>
                <td><?= $this->Number->format($office->id) ?></td>
                <td><?= h($office->name) ?></td>
                <td><?= h($office->value_statement) ?></td>
                <td><?= h($office->building) ?></td>
                <td><?= h($office->address_1) ?></td>
                <td><?= h($office->address_2) ?></td>
                <td><?= h($office->city) ?></td>
                <td><?= h($office->state) ?></td>
                <td><?= h($office->province) ?></td>
                <td><?= h($office->zip) ?></td>
                <td><?= h($office->country) ?></td>
                <td><?= h($office->delivery_address_1) ?></td>
                <td><?= h($office->delivery_address_2) ?></td>
                <td><?= h($office->delivery_city) ?></td>
                <td><?= h($office->delivery_state) ?></td>
                <td><?= h($office->delivery_province) ?></td>
                <td><?= h($office->delivery_zip) ?></td>
                <td><?= h($office->delivery_country) ?></td>
                <td><?= h($office->phone) ?></td>
                <td><?= h($office->fax) ?></td>
                <td><?= h($office->email) ?></td>
                <td><?= h($office->directions_url) ?></td>
                <td><?= $this->Number->format($office->sort) ?></td>
                <td><?= $this->Number->format($office->display_status_id) ?></td>
                <td><?= h($office->date_updated) ?></td>
                <td><?= h($office->date_created) ?></td>
                <td><?= $this->Number->format($office->migrated_OfficeID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $office->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $office->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $office->id], ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
