<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $register = mysqli_fetch_assoc($result);

    if($register && password_verify($password, $register['password'])){
        $_SESSION['username'] = $register['username'];
        $_SESSION['password'] = $register['password'];
        header("Location: aksilogin.php");
        exit(); // penting! hentikan script setelah redirect
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body style="background-image: url(bg.png);">
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
                <div class="container-fluid">
                    <img src="logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
                  <a style="color: black; font-family: fantasy; padding-top: 10px;" class="navbar-brand" href="#"><b>DoReMiSing</b></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="index.php">Landing Page</a>
                      </li>
                      <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="aboutus.html">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="login-btn" style="text-align: center" href="login.php"><b>Log In</b></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>


     <main>


     <div class="square">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</div>




</main>


<footer class="my-footer">
    <p class="footer-title">DoReMiSing © 2025</p>
    <p class="footer-creator">Created by Chaylene Faith</p>
    <p class="footer-tagline">"Feel the Beat, Live the Melody."</p>
</footer>



</body>
</html>
<?php ob_end_flush(); ?>
