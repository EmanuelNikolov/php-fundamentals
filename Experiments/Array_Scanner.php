<form>
    First name: <input type="text" name="first_name[]">
    Last name: <input type="text" name="last_name[]">
    Age: <input type="number" name="age[]">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET['submit'])) {
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $age = $_GET['age'];
//    echo var_dump($first_name, $last_name, $age);

/*$first_name = array(
    "Nicholas",
    "Nicholai",
    "Oregon"
);
$last_name = array(
    "Logan",
    "Konrad",
    "Koe",
);
$age = array(13, 15, 16);*/

    foreach ($first_name as $item) {
        if ($item[0] === "N") {
            echo "Your first name starts with an N\r\n";
        } elseif ($item[0] === "O") {
            echo "Your first name starts with an O\r\n";
        }
    }
    foreach ($last_name as $item1) {
        if ($item1[0] === "L") {
            echo "Your last name starts with an L\r\n";
        } elseif ($item1[0] === "K") {
            echo "Your last name starts with a K\r\n";
        }
    }
    foreach ($age as $item2) {
        echo "You are $item2 years old\r\n";
    }
}