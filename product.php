<?php
// Data produk
$produk = array(
    array("nama" => "Nasi Goreng", "harga" => "$25.00", "gambar" => "img/photo1.jpg"),
    array("nama" => "Lobster Pedas", "harga" => "$35.00", "gambar" => "img/photo2.jpg"),
    array("nama" => "Korean Chicken", "harga" => "$30.00", "gambar" => "img/photo3.jpg"),
    array("nama" => "Ayam Goreng", "harga" => "$20.00", "gambar" => "img/photo4.jpg"),
    array("nama" => "Bakso Bakar", "harga" => "$150.00", "gambar" => "img/prod-1.jpg"),
    array("nama" => "Baket Chicken", "harga" => "$60.00", "gambar" => "img/prod-2.jpg"),
    array("nama" => "Es Dawet", "harga" => "$40.00", "gambar" => "img/prod-3.jpg")
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Produk</title>
    <link rel="stylesheet" href="bv-5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <?php foreach ($produk as $item) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $item['gambar']; ?>" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nama']; ?></h5>
                            <p class="card-text"><?php echo $item['harga']; ?></p>
                            <a href="#" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="bv-5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
