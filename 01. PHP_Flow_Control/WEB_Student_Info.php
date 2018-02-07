<form>
    <div>
        Operation:
        <select name="op">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names"/>
        Age:
        <input type="text" name="ages"/>
    </div>
    <div>
        <input type="submit" name="filter" value="Filter"/>
    </div>
</form>

<?php if (isset($names, $ages)) { ?>
    <table border="1" cellpadding="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($names); $i++) { ?>
            <tr>
                <td><?= $names[$i]; ?></td>
                <td><?= $ages[$i]; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
