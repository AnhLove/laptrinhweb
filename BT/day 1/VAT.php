<?php
// Khai báo hằng số VAT
define('VAT', 0.05);

// Khai báo các biến sản phẩm
$maSanPham = "EV2009";
$tenSanPham = "Tấm hợp kim nhôm ngoài trời EV2009";
$soLuong = 500;
$donGia = 160000;

// Tính toán tổng giá trước thuế
$tongGiaTruocThue = $soLuong * $donGia;

// Tính toán tổng giá sau thuế
$tongGiaSauThue = $tongGiaTruocThue * (1 + VAT);

// In ra thông tin sản phẩm
echo "Mã sản phẩm: $maSanPham<br/>";
echo "Tên sản phẩm: $tenSanPham<br/>";
echo "Số lượng: $soLuong<br/>";
echo "Đơn giá: " . number_format($donGia, 0, ',', '.') . "<br/>";
echo "Tổng giá trước thuế: " . number_format($tongGiaTruocThue, 0, ',', '.') . "<br/>";
echo "Tổng giá sau thuế: " . number_format($tongGiaSauThue, 0, ',', '.') . "<br/>";
?>