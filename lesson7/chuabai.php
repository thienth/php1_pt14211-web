<?php
$arr = [
    [
        "beatles",
        'love me do',
        'hey jude',
        'helter skelter'
    ],
    [
        "Rolling Stone",
        'Waiting for a friends',
        'Angie',
        'Yesterday\'s Papers'
    ],
    [
        "Eagles",
        'Life in the fast lane',
        'Hotel in California',
        'Best of my love'
    ]
];


?>
<h2>C1</h2>
<table border="1">
<tr>
    <th>Band</th>
    <th>Song 1</th>
    <th>Song 2</th>
    <th>Song 3</th>
</tr>
<?php
    foreach ($arr as $key => $value) {

        var_dump($value);
        // echo '<tr>';
        // foreach ($value as $key1 => $value1) {
        //     echo '<td>' . $value1 . '</td>';
        // }
        // echo '</tr>';
    }
?>
</table>

<h2>C2</h2>
<table border="1">
<tr>
    <th>Band</th>
    <th>Song 1</th>
    <th>Song 2</th>
    <th>Song 3</th>
</tr>

<?php foreach ($arr as $value): ?>
    <tr>
        <td><?= $value[0] ?></td>
        <td><?= $value[1] ?></td>
        <td><?= $value[2] ?></td>
        <td><?= $value[3] ?></td>
    </tr>
<?php endforeach ?>
</table>