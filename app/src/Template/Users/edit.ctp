<nav class="large-1 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('login'), ['action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('New Add'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('User List'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Deleted'), ['action' => 'view']) ?></li>
    </ul>
</nav>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>