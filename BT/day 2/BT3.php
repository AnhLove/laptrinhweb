<?php
// Khởi tạo biến đếm và biến tổng
$i = 1;
$sum = 0;

// Sử dụng vòng lặp while để tính tổng từ 1 đến 100
while ($i <= 100) {
    $sum += $i; // Cộng giá trị của $i vào tổng
    $i++;       // Tăng biến đếm lên 1
}

// In ra kết quả
echo "Tổng của 100 số nguyên đầu tiên (1-100) là: $sum<br>";


// Khởi tạo biến đếm
$i = 20;

// Sử dụng vòng lặp while để kiểm tra và in ra các số chia hết cho 3 trong khoảng 20-50
echo "Các số chia hết cho 3 trong khoảng từ 20 đến 50 là: ";
while ($i <= 50) {
    if ($i % 3 == 0) { // Kiểm tra nếu $i chia hết cho 3
        echo $i . " ";
    }
    $i++; // Tăng biến đếm lên 1
}