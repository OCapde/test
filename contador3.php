<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$contador = 0;

if ($fd = fopen('counter.txt', 'r')) {
    $contador = fgets($fd);
    fclose($fd);
}

$fd2 = fopen('counter.txt', 'w');
$contador = $contador + 1;

fwrite($fd2, $contador);
fclose($fd2);

echo $contador;
?>
