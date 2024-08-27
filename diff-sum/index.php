<?php
$firstNumber = 5;
$secondNumber = 9;
if ($firstNumber !== $secondNumber) {
    echo $firstNumber + $secondNumber;
} else {
    echo ($firstNumber + $secondNumber) * 3;
}

echo "<br>";
echo ($firstNumber != $secondNumber) ? ($firstNumber + $secondNumber) : ($firstNumber + $secondNumber) * 3;