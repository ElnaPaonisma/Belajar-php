<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes · Bootstrap v5.3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="display-4">Tugas Pertemuan 11</h1>
    <p class="lead">Silahkan pilih salah satu:</p>
    <div class="d-grid gap-3">
        <a href="<?php echo 'login.php'; ?>" class="btn btn-primary btn-lg">Login</a>
        <a href="<?php echo 'product.php'; ?>" class="btn btn-primary btn-lg">Produk</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
