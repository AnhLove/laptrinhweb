<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
    table {
        border-collapse: collapse;
    }

    td {
        width: 50px;
        height: 50px;
    }

    .black {
        background-color: black;
    }

    .white {
        background-color: white;
    }
    </style>
</head>

<body>
    <table>
        <?php
        // Số hàng và cột của bàn cờ
        $n = 8;
        
        // Vòng lặp tạo các hàng
        for ($row = 0; $row < $n; $row++) {
            echo "<tr>";
            // Vòng lặp tạo các ô trong hàng
            for ($col = 0; $col < $n; $col++) {
                // Tạo màu đen hoặc trắng tùy theo vị trí ô
                if (($row + $col) % 2 == 0) {
                    echo "<td class='white'></td>";
                } else {
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>