<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Large_area</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>prefecture_name</th>
            </tr>
        </thead>
    </table>
</body>
<?php foreach ($data as $obj): ?>
    <tr>
        <td><?= $obj->prefecture_name ?></td>
    </tr>
<?php endforeach; ?>
</html>