<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('login'), ['action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('User List'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Deleted'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
   </fieldset>
    <?= $this->Form->button(__('submit')) ?>
    <?= $this->Form->end() ?>
</div>