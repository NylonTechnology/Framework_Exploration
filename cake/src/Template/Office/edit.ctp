<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $office->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Office'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact Office Jn'), ['controller' => 'ContactOfficeJn', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="office form large-9 medium-8 columns content">
    <?= $this->Form->create($office) ?>
    <fieldset>
        <legend><?= __('Edit Office') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value_statement');
            echo $this->Form->input('description_intro');
            echo $this->Form->input('description');
            echo $this->Form->input('building');
            echo $this->Form->input('address_1');
            echo $this->Form->input('address_2');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('province');
            echo $this->Form->input('zip');
            echo $this->Form->input('country');
            echo $this->Form->input('delivery_notes');
            echo $this->Form->input('delivery_address_1');
            echo $this->Form->input('delivery_address_2');
            echo $this->Form->input('delivery_city');
            echo $this->Form->input('delivery_state');
            echo $this->Form->input('delivery_province');
            echo $this->Form->input('delivery_zip');
            echo $this->Form->input('delivery_country');
            echo $this->Form->input('phone');
            echo $this->Form->input('fax');
            echo $this->Form->input('email');
            echo $this->Form->input('directions');
            echo $this->Form->input('directions_url');
            echo $this->Form->input('sort');
            echo $this->Form->input('notes');
            echo $this->Form->input('display_status_id');
            echo $this->Form->input('date_updated', ['empty' => true]);
            echo $this->Form->input('date_created', ['empty' => true]);
            echo $this->Form->input('migrated_OfficeID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
