<?php
$opcion = 2;
$a = 10;
$b = 5;

switch ($opcion) {
    case 1:
        echo $a + $b;
        break;
    case 2:
        echo $a - $b;
        break;
    case 3:
        echo $a * $b;
        break;
    case 4:
        echo $a / $b;
        break;
    default:
        echo "Opción inválida";
}
?>