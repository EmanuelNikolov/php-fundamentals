<style>
    <?php include_once "style.css"; ?>
</style>
<!--input-->
<form method="post">
    <label>
        <span id="tagsInput">Enter Tags:</span>
        <input id="tags" type="text" name="tags"/>
    </label>
    <input type="submit" name="submit" value="Submit"/>
    <input type="submit" name="clear" value="Clear">
</form>
<!--output-->
<?php if (isset($allTagsSorted, $mostFrequentTag)): ?>
    <div>
        <ol id="">
            <?php foreach ($allTagsSorted as $tag => $count): ?>
                <li><?= htmlspecialchars($tag . " : " . $count . " times"); ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
    <span>Most Frequent Tag is: <?= htmlspecialchars($mostFrequentTag) ?></span>
<?php endif; ?>
