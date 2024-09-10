<?php

$myString = 'rayy@example.com' ;
$result = '';//khoi tao bien de luu ket qua

for ($i = 0; $i < strlen($myString); $i++) {
    if ($myString[$i] == '@') {
        break;
    }

    $result .= $myString[$i];
}

echo "Ket qua: " . $result;