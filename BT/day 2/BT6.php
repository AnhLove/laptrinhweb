<?php
// Độ dài n cho trước
$n = 50;

// Khởi tạo chuỗi rỗng để lưu kết quả
$result = '';

// Sử dụng vòng lặp để tạo chuỗi
for ($i = 1; $i <= $n; $i++) {
    // Thêm số hiện tại vào chuỗi kết quả
    $result .= $i;
    
    // Nếu chưa phải là số cuối cùng, thêm dấu gạch ngang
    if ($i < $n) {
        $result .= ' - ';
    }
}

// Hiển thị chuỗi kết quả
echo $result;
?>