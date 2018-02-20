<!--<form>-->
<!--    <input type="text" name="input"/>-->
<!--</form>-->
<?php
if (isset($_GET['input'])) {
    $input = strtolower($_GET['input']);
    $words = str_word_count($input, 1);
    $wordsSorted = array_count_values($words);
}
if (isset($wordsSorted)) {
    ?>
    <table border='2'>
        <?php foreach ($wordsSorted as $word=>$count) { ?>
            <tr>
                <td><?= $word; ?></td>
                <td><?= $count; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
