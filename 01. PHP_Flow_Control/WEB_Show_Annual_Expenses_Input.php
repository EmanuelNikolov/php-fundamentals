<form>
    Enter number of years:
    <input type="number" name="num" placeholder="Expenses"/>
    <input type="submit" name="submit" value="Show costs"/>
</form>
<?php if (isset($years)) { ?>
<table border=1 cellpadding=0>
    <thead>
    <tr>
        <th>Year</th>
        <?php for ($i = 0; $i < count($month); $i++) { ?>
        <th><?= $month[$i]; } ?></th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($y = 0; $y < count($years); $y++) { ?>
        <tr>
            <td><?= $years[$y]; ?></td>
            <?php for ($m = 0; $m < count($month); $m++) { ?>
            <td><?= $random = rand(0, 999); ?></td>
            <?php $total[] = $random; } ?>
            <td>
                <?php
                echo array_sum($total);
                $total = array(); }
                ?>
            </td>
        </tr>
    </tbody>
</table>
<?php } ?>