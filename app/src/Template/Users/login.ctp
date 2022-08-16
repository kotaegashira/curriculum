<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('MENU') ?></li>
        <li><?= $this->Html->link(__('New Add'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('User List'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Deleted'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>

<div class="users view large-9 medium-8 columns content">
    <div class="users form">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
        <fieldset>
            <legend>
                <?= __('Please enter your username and password.') ?>
            </legend>
            <?= $this->Form->control(__('username')); ?>
            <?= $this->Form->control(__('password')); ?>
        </fieldset>
        <?= $this->Form->button(__('submit')); ?>
        <?= $this->Form->end() ?>
    </div>
</div>