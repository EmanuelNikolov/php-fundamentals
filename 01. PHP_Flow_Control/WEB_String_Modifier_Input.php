<form>
    <input type="text" name="input"/>
    <select name="option">
        <option value="palindrome">Check Palindrome</option>
        <option value="reverse">Reverse String</option>
        <option value="split">Split</option>
        <option value="hash">Hash String</option>
        <option value="shuffle">Shuffle String</option>
    </select>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($output)) {
    echo $output;
}