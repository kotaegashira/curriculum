<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><a href="http://localhost:8080/users/add" target="_self">新規追加</a></li>
        <li><a href="http://localhost:8080/users/view" target="_self">ユーザ一覧</a></li>
        <li><a href="http://localhost:8080/users/view" target="_self">削除</a></li>
        <li><a href="http://localhost:8080/users/login" target="_self">ログイン</a></li>
        <li><a href="http://localhost:8080/users/login" target="_self">ログアウト</a></li>
    </ul>
</nav>

<div class="users form large-9 medium-8 columns content">
    <h1>在庫一覧</h1>
    ユーザ名: <?=$this->request->session()->read('Auth.User.username')?>
    <table>
        <thead>
            <tr>
                <th>個数</th>
                <th>在庫名</th>
                <th>金額</th>
            </tr>
        </thead>
        <?php foreach ($data as $obj): ?>
            <tr>
                <?php if ($obj->quantity < 0): ?>
                    <?= "*" ?>
                <?php endif; ?>
                <td><?= $obj->quantity; ?></td>
                <td><?= $obj->stockname; ?></td>
                <td><?= $obj->price; ?></td>
                <td>
                    <?php if (is_null($obj->registered_at)): ?>
                        <?= $this->Html->link('在庫発注管理者', ['action' => 'delete']) . "<br>" ; ?> 
                        <?= $this->Form->select('HelloForm.select1',
                        [
                            '発注済み'=>'発注済み',
                        ],
                        ['size'=>1]) ?>
                    <?php else: ?>
                        <?= $obj->registered_at->format('Y-m-d H:i'); ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>