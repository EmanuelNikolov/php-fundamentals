<?php
$numbers = array(
        2, 4, 6, 10, 16, 18
    );
$sqrtNum = array();
foreach ($numbers as $number) {
    $sqrtNum[] = round(sqrt($number), 2);
}
//echo var_dump($sqrtNum);
?>
<table border="1" cellpadding="0" align="center">
    <thead>
    <tr>
        <th>
            Number
        </th>
        <th>
            Square root of Number
        </th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($numbers); $i++) { ?>
    <tr>
        <td><?= $numbers[$i]; ?></td>
        <td><?= $sqrtNum[$i]; } ?></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2" align="center"><?= array_sum($sqrtNum); ?></td>
    </tr>
    </tfoot>
</table>