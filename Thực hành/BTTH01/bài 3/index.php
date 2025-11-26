<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đọc CSV và Hiển Thị Dữ Liệu</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Danh sách người dùng </h2>

<?php
$filename = "65HTTT_Danh_sach_diem_danh.csv";

if (!file_exists($filename)) {
    echo "<p style='text-align:center;color:red;'> File CSV không tồn tại!</p>";
    exit;
}

if (($file = fopen($filename, "r")) !== FALSE) {

    echo "<table>";
    
    $header = fgetcsv(stream: $file);
    echo "<tr>";
    foreach ($header as $col) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    while (($row = fgetcsv($file)) !== FALSE) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    fclose($file);
}
?>

</body>
</html>
