<?php


$sum = 0;
$sum2 = 0;

while ($i <= 100) {
    $sum += $i;
    $i++;
    $sum2 += $i * $i;
}

echo "Tổng của 100 số nguyên đầu tiên (1-100) là: $sum<br>";
echo "Tổng binh phuong của 100 số nguyên đầu tiên (1-100) là: $sum2<br>";


$sum3 = 0;
$sum4 = 0;
for ($n = 1; $n <= 100; $n++) {
    $sum3 += $n;
    $sum4 += $n * $n;

    if($n == 50){
        break;
    }
}

echo "Tong so nguyen tu 1 den 50 la: $sum3 <br>";
echo "Tong binh phuong so nguyen tu 1 den 50 la: $sum4 <br>";