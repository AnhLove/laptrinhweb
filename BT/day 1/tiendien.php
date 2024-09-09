<?php
$kw = 650;

function tinhTienDien($kw) {
    $tienDien = 0;

    if ($kw <= 100) {
        $tienDien = $kw * 450;
    } else if ($kw <= 200) {
        $tienDien = (100 * 450) + (($kw - 100) * 600);
    } else if ($kw <= 300) {
        $tienDien = (100 * 450) + (100 * 600) + (($kw - 200) * 750);
    } else if ($kw <= 500) {
        $tienDien = (100 * 450) + (100 * 600) + (100 * 750) + (($kw - 300) * 900);
    } else if ($kw <= 1000) {
        $tienDien = (100 * 450) + (100 * 600) + (100 * 750) + (100 * 900) + (($kw - 500) * 1000);
    } else {
        $tienDien = (100 * 450) + (100 * 600) + (100 * 750) + (100 * 900) + (100 * 1000) + (($kw - 1000) * 1200);
    }
    return $tienDien;
}

    $tienTruocVAT = tinhTienDien($kw);
    $tienVAT = $tienTruocVAT * 0.10;
    $tienSauVAT = $tienTruocVAT + $tienVAT;
    
echo "Số KW tiêu thụ: $kw <br/>";
echo "Tiền điện trước thuế: " . number_format($tienTruocVAT, 0, ',', '.') . " VND <br/>";
echo "Thuế VAT (10%): " . number_format($tienVAT, 0, ',', '.') . " VND <br/> ";
echo "Tổng tiền phải nộp sau thuế: " . number_format($tienSauVAT, 0, ',', '.') . " VND <br/>";
?>