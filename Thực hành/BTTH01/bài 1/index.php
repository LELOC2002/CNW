<?php 
include 'data.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách hoa</title>
    <style>
        .card {
            width: 300px;
            padding: 10px;
            border: 1px solid #ddd;
            margin: 10px;
            float: left;
            border-radius: 8px;
        }
        img { width: 100%; height: 200px; object-fit: cover; }
    </style>
</head>
<body>
    <h1> Danh sách các loài hoa</h1>

    <?php foreach($flowers as $f): ?>
        <div class="card">
            <img src="<?= $f['image'] ?>" alt="<?= $f['name'] ?>">
            <h3><?= $f['name'] ?></h3>
            <p><?= $f['desc'] ?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>
