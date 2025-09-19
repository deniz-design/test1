<?php

function greet($name) {
    echo "Hello, $name! Welcome to PHP.<br>";
}


function addNumbers($a, $b) {
    return $a + $b;
}


greet("Alice");

$sum = addNumbers(5, 7);
echo "The sum of 5 and 7 is: $sum";
?>
