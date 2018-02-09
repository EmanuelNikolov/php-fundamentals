<form>
    Input string:
    <input type="text" name="input"/>
    <input type="submit" name="submit"/>
</form>
<?php if (isset($number, $sumDigits)) { ?>
    <table>
        <?php for ($i = 0; $i < count($number); $i++) { ?>
            <tr>
                <td><?= $number[$i]; ?></td>
                <td><?= $sumDigits[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
