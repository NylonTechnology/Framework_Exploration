<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contact index large-9 medium-8 columns content">
    <h3><?= __('Contact') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('internalUserID') ?></th>
                <th><?= $this->Paginator->sort('gender') ?></th>
                <th><?= $this->Paginator->sort('company_name') ?></th>
                <th><?= $this->Paginator->sort('job_title') ?></th>
                <th><?= $this->Paginator->sort('business_address_1') ?></th>
                <th><?= $this->Paginator->sort('business_address_2') ?></th>
                <th><?= $this->Paginator->sort('business_city') ?></th>
                <th><?= $this->Paginator->sort('business_state') ?></th>
                <th><?= $this->Paginator->sort('business_zip') ?></th>
                <th><?= $this->Paginator->sort('business_country') ?></th>
                <th><?= $this->Paginator->sort('business_phone_1') ?></th>
                <th><?= $this->Paginator->sort('business_phone_1_ext') ?></th>
                <th><?= $this->Paginator->sort('business_phone_2') ?></th>
                <th><?= $this->Paginator->sort('home_address_1') ?></th>
                <th><?= $this->Paginator->sort('home_address_2') ?></th>
                <th><?= $this->Paginator->sort('home_city') ?></th>
                <th><?= $this->Paginator->sort('home_state') ?></th>
                <th><?= $this->Paginator->sort('home_zip') ?></th>
                <th><?= $this->Paginator->sort('home_country') ?></th>
                <th><?= $this->Paginator->sort('home_phone_1') ?></th>
                <th><?= $this->Paginator->sort('home_phone_2') ?></th>
                <th><?= $this->Paginator->sort('is_summer_associate') ?></th>
                <th><?= $this->Paginator->sort('is_on_holiday_list') ?></th>
                <th><?= $this->Paginator->sort('is_retired') ?></th>
                <th><?= $this->Paginator->sort('is_deceased') ?></th>
                <th><?= $this->Paginator->sort('is_on_dnc_list') ?></th>
                <th><?= $this->Paginator->sort('primary_practice_id') ?></th>
                <th><?= $this->Paginator->sort('contact_internal_department_id') ?></th>
                <th><?= $this->Paginator->sort('date_updated') ?></th>
                <th><?= $this->Paginator->sort('date_created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contact as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->internalUserID) ?></td>
                <td><?= h($contact->gender) ?></td>
                <td><?= h($contact->company_name) ?></td>
                <td><?= h($contact->job_title) ?></td>
                <td><?= h($contact->business_address_1) ?></td>
                <td><?= h($contact->business_address_2) ?></td>
                <td><?= h($contact->business_city) ?></td>
                <td><?= h($contact->business_state) ?></td>
                <td><?= h($contact->business_zip) ?></td>
                <td><?= h($contact->business_country) ?></td>
                <td><?= h($contact->business_phone_1) ?></td>
                <td><?= h($contact->business_phone_1_ext) ?></td>
                <td><?= h($contact->business_phone_2) ?></td>
                <td><?= h($contact->home_address_1) ?></td>
                <td><?= h($contact->home_address_2) ?></td>
                <td><?= h($contact->home_city) ?></td>
                <td><?= h($contact->home_state) ?></td>
                <td><?= h($contact->home_zip) ?></td>
                <td><?= h($contact->home_country) ?></td>
                <td><?= h($contact->home_phone_1) ?></td>
                <td><?= h($contact->home_phone_2) ?></td>
                <td><?= h($contact->is_summer_associate) ?></td>
                <td><?= h($contact->is_on_holiday_list) ?></td>
                <td><?= h($contact->is_retired) ?></td>
                <td><?= h($contact->is_deceased) ?></td>
                <td><?= h($contact->is_on_dnc_list) ?></td>
                <td><?= $this->Number->format($contact->primary_practice_id) ?></td>
                <td><?= $this->Number->format($contact->contact_internal_department_id) ?></td>
                <td><?= h($contact->date_updated) ?></td>
                <td><?= h($contact->date_created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
