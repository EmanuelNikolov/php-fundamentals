<style>
    <?php include_once "style.css"; ?>
</style>
<!--input-->
<form method="post">
    <label>
        <span id="tagsInput">Enter HTML Tags:</span>
        <input id="tags" type="text" name="tags"/>
    </label>
    <input type="submit" name="submit" value="Submit"/>
    <input type="submit" name="clear" value="Clear">
</form>
<!--output-->
<?php if (isset($validationResult, $_SESSION['successCount'])): ?>
<div>
    <h1><?= $validationResult; ?></h1>
    <h1>Score: <?= $_SESSION['successCount']; ?></h1>
</div>
<?php endif; ?>