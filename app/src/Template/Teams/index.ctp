<h1>ユーザ</h1>

<h3 class="large-10 medium-10 columns"><?= __('Teams') ?></h3>
<span class="large-2 medium-2 columns" style="border:thick double #258D97;text-align:center;">
<?= $this->Html->link(__('Download'), ['action' => 'download']) ?>
</span>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>account</th>
            <th>password</th>
            <th>name</th>
            <th>email</th>
            <th>created</th>
            <th>modified</th>
            <th>created_user</th>
            <th>modified_user</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $obj): ?>
            <tr>
                <td><?= $obj->id ?></td>
                <td><?= h($obj->account) ?></td>
                <td><?= h($obj->password) ?></td>
                <td><?= h($obj->name) ?></td>
                <td><?= h($obj->email) ?></td>
                <td><?= h($obj->created) ?></td>
                <td><?= h($obj->modified) ?></td>
                <td><?= h($obj->created_user) ?></td>
                <td><?= h($obj->modified_user) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>