<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('InternalUserID') ?></th>
            <td><?= h($contact->internalUserID) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($contact->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Company Name') ?></th>
            <td><?= h($contact->company_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Job Title') ?></th>
            <td><?= h($contact->job_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Address 1') ?></th>
            <td><?= h($contact->business_address_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Address 2') ?></th>
            <td><?= h($contact->business_address_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Business City') ?></th>
            <td><?= h($contact->business_city) ?></td>
        </tr>
        <tr>
            <th><?= __('Business State') ?></th>
            <td><?= h($contact->business_state) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Zip') ?></th>
            <td><?= h($contact->business_zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Country') ?></th>
            <td><?= h($contact->business_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Phone 1') ?></th>
            <td><?= h($contact->business_phone_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Phone 1 Ext') ?></th>
            <td><?= h($contact->business_phone_1_ext) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Phone 2') ?></th>
            <td><?= h($contact->business_phone_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Address 1') ?></th>
            <td><?= h($contact->home_address_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Address 2') ?></th>
            <td><?= h($contact->home_address_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Home City') ?></th>
            <td><?= h($contact->home_city) ?></td>
        </tr>
        <tr>
            <th><?= __('Home State') ?></th>
            <td><?= h($contact->home_state) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Zip') ?></th>
            <td><?= h($contact->home_zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Country') ?></th>
            <td><?= h($contact->home_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Phone 1') ?></th>
            <td><?= h($contact->home_phone_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Home Phone 2') ?></th>
            <td><?= h($contact->home_phone_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Primary Practice Id') ?></th>
            <td><?= $this->Number->format($contact->primary_practice_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Internal Department Id') ?></th>
            <td><?= $this->Number->format($contact->contact_internal_department_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Updated') ?></th>
            <td><?= h($contact->date_updated) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Created') ?></th>
            <td><?= h($contact->date_created) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Summer Associate') ?></th>
            <td><?= $contact->is_summer_associate ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is On Holiday List') ?></th>
            <td><?= $contact->is_on_holiday_list ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is Retired') ?></th>
            <td><?= $contact->is_retired ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is Deceased') ?></th>
            <td><?= $contact->is_deceased ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Is On Dnc List') ?></th>
            <td><?= $contact->is_on_dnc_list ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Pepper History') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->pepper_history)); ?>
    </div>
    <div class="row">
        <h4><?= __('Organizations') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->organizations)); ?>
    </div>
    <div class="row">
        <h4><?= __('Prior Employment') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->prior_employment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Reference Keys') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->reference_keys)); ?>
    </div>
    <div class="row">
        <h4><?= __('Business Address Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->business_address_notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Business Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->business_notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Home Address Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->home_address_notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Dnc Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dnc_notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Offices') ?></h4>
        <?php if (!empty($contact->offices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Value Statement') ?></th>
                <th><?= __('Description Intro') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Building') ?></th>
                <th><?= __('Address 1') ?></th>
                <th><?= __('Address 2') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('State') ?></th>
                <th><?= __('Province') ?></th>
                <th><?= __('Zip') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Delivery Notes') ?></th>
                <th><?= __('Delivery Address 1') ?></th>
                <th><?= __('Delivery Address 2') ?></th>
                <th><?= __('Delivery City') ?></th>
                <th><?= __('Delivery State') ?></th>
                <th><?= __('Delivery Province') ?></th>
                <th><?= __('Delivery Zip') ?></th>
                <th><?= __('Delivery Country') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Fax') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Directions') ?></th>
                <th><?= __('Directions Url') ?></th>
                <th><?= __('Sort') ?></th>
                <th><?= __('Notes') ?></th>
                <th><?= __('Display Status Id') ?></th>
                <th><?= __('Date Updated') ?></th>
                <th><?= __('Date Created') ?></th>
                <th><?= __('Migrated OfficeID') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contact->offices as $offices): ?>
            <tr>
                <td><?= h($offices->id) ?></td>
                <td><?= h($offices->name) ?></td>
                <td><?= h($offices->value_statement) ?></td>
                <td><?= h($offices->description_intro) ?></td>
                <td><?= h($offices->description) ?></td>
                <td><?= h($offices->building) ?></td>
                <td><?= h($offices->address_1) ?></td>
                <td><?= h($offices->address_2) ?></td>
                <td><?= h($offices->city) ?></td>
                <td><?= h($offices->state) ?></td>
                <td><?= h($offices->province) ?></td>
                <td><?= h($offices->zip) ?></td>
                <td><?= h($offices->country) ?></td>
                <td><?= h($offices->delivery_notes) ?></td>
                <td><?= h($offices->delivery_address_1) ?></td>
                <td><?= h($offices->delivery_address_2) ?></td>
                <td><?= h($offices->delivery_city) ?></td>
                <td><?= h($offices->delivery_state) ?></td>
                <td><?= h($offices->delivery_province) ?></td>
                <td><?= h($offices->delivery_zip) ?></td>
                <td><?= h($offices->delivery_country) ?></td>
                <td><?= h($offices->phone) ?></td>
                <td><?= h($offices->fax) ?></td>
                <td><?= h($offices->email) ?></td>
                <td><?= h($offices->directions) ?></td>
                <td><?= h($offices->directions_url) ?></td>
                <td><?= h($offices->sort) ?></td>
                <td><?= h($offices->notes) ?></td>
                <td><?= h($offices->display_status_id) ?></td>
                <td><?= h($offices->date_updated) ?></td>
                <td><?= h($offices->date_created) ?></td>
                <td><?= h($offices->migrated_OfficeID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Offices', 'action' => 'view', $offices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Offices', 'action' => 'edit', $offices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offices', 'action' => 'delete', $offices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
