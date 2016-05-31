<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->input('internalUserID');
            echo $this->Form->input('pepper_history');
            echo $this->Form->input('organizations');
            echo $this->Form->input('prior_employment');
            echo $this->Form->input('reference_keys');
            echo $this->Form->input('gender');
            echo $this->Form->input('company_name');
            echo $this->Form->input('job_title');
            echo $this->Form->input('business_address_1');
            echo $this->Form->input('business_address_2');
            echo $this->Form->input('business_city');
            echo $this->Form->input('business_state');
            echo $this->Form->input('business_zip');
            echo $this->Form->input('business_country');
            echo $this->Form->input('business_address_notes');
            echo $this->Form->input('business_phone_1');
            echo $this->Form->input('business_phone_1_ext');
            echo $this->Form->input('business_phone_2');
            echo $this->Form->input('business_notes');
            echo $this->Form->input('home_address_1');
            echo $this->Form->input('home_address_2');
            echo $this->Form->input('home_city');
            echo $this->Form->input('home_state');
            echo $this->Form->input('home_zip');
            echo $this->Form->input('home_country');
            echo $this->Form->input('home_address_notes');
            echo $this->Form->input('home_phone_1');
            echo $this->Form->input('home_phone_2');
            echo $this->Form->input('is_summer_associate');
            echo $this->Form->input('is_on_holiday_list');
            echo $this->Form->input('is_retired');
            echo $this->Form->input('is_deceased');
            echo $this->Form->input('is_on_dnc_list');
            echo $this->Form->input('dnc_notes');
            echo $this->Form->input('primary_practice_id');
            echo $this->Form->input('contact_internal_department_id');
            echo $this->Form->input('date_updated', ['empty' => true]);
            echo $this->Form->input('date_created', ['empty' => true]);
            echo $this->Form->input('offices._ids', ['options' => $offices]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
