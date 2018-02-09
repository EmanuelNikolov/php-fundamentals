<form>
    Starting index:
    <input type="number" name="start"/>
    Ending index:
    <input type="number" name="end"/>
    <input type="submit" name="submit"/>
</form>
<?php if (isset($numbers)) { ?>
    <h1>Prime numbers are bold</h1>
    <p>
        <?php for ($i = 0; $i < count($numbers); $i++) {
            echo $numbers[$i] . ", ";
            if ($numbers[$i] )
            if ($i == (count($numbers) - 1)){
                echo $numbers[$i];
            }
        } ?>
    </p>
<?php } ?>
