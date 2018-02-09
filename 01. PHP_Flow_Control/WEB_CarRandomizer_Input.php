<form>
    Enter cars:
    <input type="text" name="cars" placeholder="Input cars here..."/>
    <input type="submit" name="submit" value="Show result"/>
</form>
<?php if (isset($cars)) { ?>
    <table>
        <thead>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($cars); $i++) { ?>
            <tr>
                <td><?= $cars[$i]; ?></td>
                <td><?= $color[array_rand($color)]; ?></td>
                <td><?= rand(1, 5); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
