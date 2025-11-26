<?php 
include 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý hoa</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        td, th { border: 1px solid #333; padding: 8px; }
        img { width: 80px; height: 60px; object-fit: cover; }
    </style>
</head>
<body>

<h1> 	Người dùng quản trị – Danh sách Hoa</h1>

<table>
    <tr>
        <th>Ảnh</th>
        <th>Tên hoa</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>

    <?php foreach($flowers as $index => $f): ?>
    <tr>
        <td><img src="<?= $f['image'] ?>"></td>
        <td><?= $f['name'] ?></td>
        <td><?= $f['desc'] ?></td>
        <td>
            <a href="edit.php?id=<?= $index ?>">Sửa</a> | 
            <a href="delete.php?id=<?= $index ?>">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<br>
<a href="add.php">➕ Thêm hoa mới</a>

</body>
</html>
