<?php

$num1 = 10;
$a = $num1;
$factorial = 1;
while ($a >= 1) {
    $factorial = $factorial * $a;
    $a--;

}

echo "El factorial de $num1 es: $factorial";