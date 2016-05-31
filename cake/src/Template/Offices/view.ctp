<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Office'), ['action' => 'edit', $office->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Office'), ['action' => 'delete', $office->id], ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offices view large-9 medium-8 columns content">
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
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($office->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('InternalUserID') ?></th>
                <th><?= __('Pepper History') ?></th>
                <th><?= __('Organizations') ?></th>
                <th><?= __('Prior Employment') ?></th>
                <th><?= __('Reference Keys') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Company Name') ?></th>
                <th><?= __('Job Title') ?></th>
                <th><?= __('Business Address 1') ?></th>
                <th><?= __('Business Address 2') ?></th>
                <th><?= __('Business City') ?></th>
                <th><?= __('Business State') ?></th>
                <th><?= __('Business Zip') ?></th>
                <th><?= __('Business Country') ?></th>
                <th><?= __('Business Address Notes') ?></th>
                <th><?= __('Business Phone 1') ?></th>
                <th><?= __('Business Phone 1 Ext') ?></th>
                <th><?= __('Business Phone 2') ?></th>
                <th><?= __('Business Notes') ?></th>
                <th><?= __('Home Address 1') ?></th>
                <th><?= __('Home Address 2') ?></th>
                <th><?= __('Home City') ?></th>
                <th><?= __('Home State') ?></th>
                <th><?= __('Home Zip') ?></th>
                <th><?= __('Home Country') ?></th>
                <th><?= __('Home Address Notes') ?></th>
                <th><?= __('Home Phone 1') ?></th>
                <th><?= __('Home Phone 2') ?></th>
                <th><?= __('Is Summer Associate') ?></th>
                <th><?= __('Is On Holiday List') ?></th>
                <th><?= __('Is Retired') ?></th>
                <th><?= __('Is Deceased') ?></th>
                <th><?= __('Is On Dnc List') ?></th>
                <th><?= __('Dnc Notes') ?></th>
                <th><?= __('Primary Practice Id') ?></th>
                <th><?= __('Contact Internal Department Id') ?></th>
                <th><?= __('Date Updated') ?></th>
                <th><?= __('Date Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($office->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->internalUserID) ?></td>
                <td><?= h($contacts->pepper_history) ?></td>
                <td><?= h($contacts->organizations) ?></td>
                <td><?= h($contacts->prior_employment) ?></td>
                <td><?= h($contacts->reference_keys) ?></td>
                <td><?= h($contacts->gender) ?></td>
                <td><?= h($contacts->company_name) ?></td>
                <td><?= h($contacts->job_title) ?></td>
                <td><?= h($contacts->business_address_1) ?></td>
                <td><?= h($contacts->business_address_2) ?></td>
                <td><?= h($contacts->business_city) ?></td>
                <td><?= h($contacts->business_state) ?></td>
                <td><?= h($contacts->business_zip) ?></td>
                <td><?= h($contacts->business_country) ?></td>
                <td><?= h($contacts->business_address_notes) ?></td>
                <td><?= h($contacts->business_phone_1) ?></td>
                <td><?= h($contacts->business_phone_1_ext) ?></td>
                <td><?= h($contacts->business_phone_2) ?></td>
                <td><?= h($contacts->business_notes) ?></td>
                <td><?= h($contacts->home_address_1) ?></td>
                <td><?= h($contacts->home_address_2) ?></td>
                <td><?= h($contacts->home_city) ?></td>
                <td><?= h($contacts->home_state) ?></td>
                <td><?= h($contacts->home_zip) ?></td>
                <td><?= h($contacts->home_country) ?></td>
                <td><?= h($contacts->home_address_notes) ?></td>
                <td><?= h($contacts->home_phone_1) ?></td>
                <td><?= h($contacts->home_phone_2) ?></td>
                <td><?= h($contacts->is_summer_associate) ?></td>
                <td><?= h($contacts->is_on_holiday_list) ?></td>
                <td><?= h($contacts->is_retired) ?></td>
                <td><?= h($contacts->is_deceased) ?></td>
                <td><?= h($contacts->is_on_dnc_list) ?></td>
                <td><?= h($contacts->dnc_notes) ?></td>
                <td><?= h($contacts->primary_practice_id) ?></td>
                <td><?= h($contacts->contact_internal_department_id) ?></td>
                <td><?= h($contacts->date_updated) ?></td>
                <td><?= h($contacts->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
