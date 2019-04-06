<?php 
$arr = [
    [
        'name' => 'Hoang Trong Chien',
        'age' => 21,
        'gender' => 1,
        'hometown' => 'Bac Giang',
        'course' => '12.3',
        'score' => 4
    ],
    [
        'name' => 'Tran Thanh Son',
        'age' => 20,
        'gender' => 3,
        'hometown' => 'Ha Nam',
        'course' => '13.1',
        'score' => 7
    ]
];

$order = [
    [
        'min' => 0,
        'max' => 4.9,
        'level' => "Dưới trung bình"
    ],
    [
        'min' => 5,
        'max' => 6.9,
        'level' => "Trung bình khá"
    ],
    [
        'min' => 7,
        'max' => 8.9,
        'level' => "Khá"
    ],
    [
        'min' => 9,
        'max' => 10,
        'level' => "Giỏi"
    ],
]
?>

<h2>C1</h2>
<table border="1">
<tr>
    <th>Tên sv</th>
    <th>Tuổi</th>
    <th>Quê Quán</th>
    <th>Khóa</th>
    <th>Giới tính</th>
    <th>Học lực</th>
</tr>
<?php foreach ($arr as $key => $value): ?>
    <tr>
        <td><?= $value['name'] ?></td>
        <td><?= $value['age'] ?></td>
        <td><?= $value['hometown'] ?></td>
        <td><?= $value['course'] ?></td>
        <td>
            <?php if($value['gender'] == 1):?>
                Nam
            <?php elseif($value['gender'] == 2): ?>
                Nữ
            <?php else: ?>
                Khác
            <?php endif  ?>
        </td>
        <td></td>
    </tr>
<?php endforeach?>

</table>