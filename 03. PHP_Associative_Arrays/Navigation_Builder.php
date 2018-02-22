<form>
    <input type="text" name="categories"/>
    <input type="text" name="tags"/>
    <input type="text" name="months"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['categories']) || isset($_GET['tags']) || isset($_GET['months'])) {
    $cat = explode(", ", $_GET['categories']);
    $tags = explode(", ", $_GET['tags']);
    $months = explode(", ", $_GET['months']);
?>
<h2>Categories</h2>
    <ul>
    <?php foreach ($cat as $value) { ?>
        <li><?= $value; } ?></li>
    </ul>
<h2>Tags</h2>
    <ul>
        <?php foreach ($tags as $value) { ?>
        <li><?= $value; } ?></li>
    </ul>
<h2>Months</h2>
    <ul>
        <?php foreach ($months as $value) { ?>
        <li><?= $value; } ?></li>
    </ul>
<?php } ?>