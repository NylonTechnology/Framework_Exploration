<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Office'), ['action' => 'edit', $office->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Office'), ['action' => 'delete', $office->id], ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Office'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="office view large-9 medium-8 columns content">
    <h3><?= h($office->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($office->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Value Statement') ?></th>
            <td><?= h($office->value_statement) ?></td>
        </tr>
        <tr>
            <th><?= __('Building') ?></th>
            <td><?= h($office->building) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 1') ?></th>
            <td><?= h($office->address_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Address 2') ?></th>
            <td><?= h($office->address_2) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($office->city) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($office->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= h($office->province) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($office->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($office->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Address 1') ?></th>
            <td><?= h($office->delivery_address_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Address 2') ?></th>
            <td><?= h($office->delivery_address_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery City') ?></th>
            <td><?= h($office->delivery_city) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery State') ?></th>
            <td><?= h($office->delivery_state) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Province') ?></th>
            <td><?= h($office->delivery_province) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Zip') ?></th>
            <td><?= h($office->delivery_zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Delivery Country') ?></th>
            <td><?= h($office->delivery_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($office->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Fax') ?></th>
            <td><?= h($office->fax) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($office->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Directions Url') ?></th>
            <td><?= h($office->directions_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($office->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort') ?></th>
            <td><?= $this->Number->format($office->sort) ?></td>
        </tr>
        <tr>
            <th><?= __('Display Status Id') ?></th>
            <td><?= $this->Number->format($office->display_status_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Migrated OfficeID') ?></th>
            <td><?= $this->Number->format($office->migrated_OfficeID) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Updated') ?></th>
            <td><?= h($office->date_updated) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Created') ?></th>
            <td><?= h($office->date_created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description Intro') ?></h4>
        <?= $this->Text->autoParagraph(h($office->description_intro)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($office->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Delivery Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($office->delivery_notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Directions') ?></h4>
        <?= $this->Text->autoParagraph(h($office->directions)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($office->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contact Office Jn') ?></h4>
        <?php if (!empty($office->contact_office_jn)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Fax') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Sort') ?></th>
                <th><?= __('Date Updated') ?></th>
                <th><?= __('Date Created') ?></th>
                <th><?= __('Office Id') ?></th>
                <th><?= __('Contact Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($office->contact_office_jn as $contactOfficeJn): ?>
            <tr>
                <td><?= h($contactOfficeJn->id) ?></td>
                <td><?= h($contactOfficeJn->phone) ?></td>
                <td><?= h($contactOfficeJn->fax) ?></td>
                <td><?= h($contactOfficeJn->mobile) ?></td>
                <td><?= h($contactOfficeJn->sort) ?></td>
                <td><?= h($contactOfficeJn->date_updated) ?></td>
                <td><?= h($contactOfficeJn->date_created) ?></td>
                <td><?= h($contactOfficeJn->office_id) ?></td>
                <td><?= h($contactOfficeJn->contact_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContactOfficeJn', 'action' => 'view', $contactOfficeJn->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContactOfficeJn', 'action' => 'edit', $contactOfficeJn->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContactOfficeJn', 'action' => 'delete', $contactOfficeJn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactOfficeJn->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
