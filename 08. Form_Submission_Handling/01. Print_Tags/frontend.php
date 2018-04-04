<style>
    <?php include_once "style.css"; ?>
</style>
<!--input-->
<div>
    <form method="post">
        <label>
            <div id="tagsText">Enter Tags:</div>
            <input id="tags" type="text" name="tags" required/>
        </label>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</div>
<!--output-->
<?php if (isset($tagsArr)): ?>
    <div>
        <ol>
            <?php foreach ($tagsArr as $tag): ?>
                <li><?= htmlspecialchars($tag); ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
<?php endif; ?>
