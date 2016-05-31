<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contact view large-9 medium-8 columns content">
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
        <h4><?= __('Related Contact Office Jn') ?></h4>
        <?php if (!empty($contact->contact_office_jn)): ?>
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
            <?php foreach ($contact->contact_office_jn as $contactOfficeJn): ?>
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
