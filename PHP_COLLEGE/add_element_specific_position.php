<?php
$originalArray = ["apple", "banana", "cherry", "date"];
$insertedValue = "grape"; // Value to insert
$position = 2; // Index where you want to insert the value

// Insert the value at the specified position
array_splice($originalArray, $position, 0, $insertedValue);

// Print the modified array
print_r($originalArray);
?>
