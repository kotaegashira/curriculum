<nav class="large-3 medium-4 columns" id="actions-sidebar">    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('login'), ['action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('New Add'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Deleted'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>

<div class="users view large-9 medium-8 columns content">
<h1>ユーザ一覧</h1>
<table>
    <tr>
        <th>ユーザネーム</th>
        <th>パスワード</th>
        <th>作成日</th>
        <th>変更日</th>
        <th>編集</th>
    </tr>    
    <?php foreach ($user as $user): ?>
    <tr>
        <td>
            <?php if ($user->quantity < 0): ?>
            <?= "＊" ?>
            <?php endif; ?>
            <?= $user->username; ?>
        </td>
        <td><?= $user->password; ?></td>
        <td><?= $user->created; ?></td>
        <td><?= $user->modified; ?></td>
        <td><?= $this->Html->link(__('edit'), ['action' => 'edit', $user->id]); ?></td>
        <td><?= $this->Form->postLink(__('Deleted'), ['action' => 'delete', $user->id], 
        ['confirm' => __('Are you sure you want to delete it? # {0}?', $user->id)]) ?></>

        <td>
            <?php if (is_null($user->registered_at)): ?>
            -
            <?php else: ?>
            <?= $user->registered_at->format('Y-m-d H:i'); ?>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>