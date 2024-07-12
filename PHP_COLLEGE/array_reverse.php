<?php
$a = array("23", "90", "7", "6", "76", "43", "34", "0", "676", "8");

sort($a);

foreach ($a as $value) {
    echo $value . "<br>";
}

$reversedArray = array_reverse($a);

echo "<br>Reversed elements:<br>";
foreach ($reversedArray as $value) {
    echo $value . "<br>";
}
?>
