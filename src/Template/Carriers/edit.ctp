<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier $carrier
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carrier'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carriers form large-10 medium-9 columns content">
    <?= $this->Form->create($carrier) ?>
    <fieldset>
        <legend><?= __('Edit Carrier') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('carrier_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
