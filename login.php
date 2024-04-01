<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses login di sini
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi login sesuai dengan kebutuhan
    if ($email === "contoh@email.com" && $password === "password123") {
        // Redirect ke halaman dashboard jika login berhasil
        header("Location: dashboard.php");
        exit;
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link rel="stylesheet" href="bv-5/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
 </head>

<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <img src="img/logo.png" class="img-fluid" alt="...">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Username/Email*</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Username/Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password*</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>

                        <div>
                            <a href="#" class="link">Lupa Password?</a>
                        </div>
                    </div>

                    <div class="d-grid mt-5">
                        <button type="submit" class="btn btn-primary btn-login" name="login">Login</button>
                    </div>
                </form>
                <?php
                if (isset($error_message)) {
                    echo '<div class="alert alert-danger mt-3" role="alert">' . $error_message . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <script src="bv-5/js/bootstrap.bundle.min.js"></script>
    <script src="scriptlogin.js"></script>
</body>

</html>
