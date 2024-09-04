<?php
// Khai báo mảng các số nguyên
$array = [12, 45, 23, 89, 56, 78, 90, 34, 67, 23]; // Bạn có thể thay đổi giá trị của mảng theo ý muốn

// Tìm phần tử lớn nhất
$maxValue = max($array);

// Tìm phần tử nhỏ nhất
$minValue = min($array);

// Tính tổng các phần tử trong mảng
$sum = array_sum($array);

// Tính số lượng phần tử trong mảng
$count = count($array);

// Tính trung bình cộng
$average = $sum / $count;

// In ra kết quả
echo "Mảng: " . implode(", ", $array) . "<br>";
echo "Phần tử lớn nhất: $maxValue<br>";
echo "Phần tử nhỏ nhất: $minValue<br>";
echo "Trung bình cộng của các phần tử: $average<br>";
?>