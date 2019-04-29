<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>三角螺旋数组</title>
</head>
<style>
    .grey{background-color: #c0c0c0;}
</style>
<body>
<table>
    <thead></thead>
    <tbody>
    <?php foreach ($array as $y => $row):?>
    <tr>
        <?php ksort($row); foreach ($row as $x => $v):?>
        <!--<td class="<?= ceil(sqrt($v)) % 2 == 0 ? 'grey' : ''?>"><?= $v?></td>-->
        <td class="<?= max($x, $y) % 2 == 0 ? 'grey' : ''?>"><?= $v?></td>
        <?php endforeach;?>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>