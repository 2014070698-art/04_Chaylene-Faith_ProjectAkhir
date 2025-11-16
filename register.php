<?php
include 'koneksi.php';

// Cek apakah form telah disubmit
if (isset($_POST['register'])) {
    // Ambil data dari form
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Simpan data ke database
    $query = "INSERT INTO register (username, nama_lengkap, tanggal_lahir, email, password)
              VALUES ('$username', '$nama_lengkap', '$tanggal_lahir', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location='login.php';
              </script>";
        exit();
    } else {
        echo "Gagal mendaftar: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href='style.css'/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

      <style>
      html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    }
      body {
    padding-top: 80px;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
    }

        .my-footer {
   width: 100%;
    background-color: #000000;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-family: 'Poppins', sans-serif;
    margin-top: auto;
}

.my-footer p {
    margin: 5px 0;
}

.footer-title {
    font-weight: 600;
    font-size: 16px;
}

.footer-creator {
    font-weight: 300;
    font-size: 14px;
}

.footer-tagline {
    font-style: italic;
    font-size: 13px;
    opacity: 0.8;
}
        * {
            box-sizing: border-box;
        }

        main {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            flex: 1;
        }

        .register-box {
            background: white;
            width: 550px;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.25);
        }

        .register-box h2 {
            text-align: center;
            font-size: 40px;
            margin-bottom: 30px;
            color: #333;
        }

        .register-box label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .register-box input {
            width: 100%;
            padding: 15px;
            margin-top: 8px;
            margin-bottom: 20px;
            border-radius: 12px;
            border: 1px solid #820000ff;
            font-size: 18px;
        }

        .register-box input:focus {
            border-color: #ff4c4cff;
            box-shadow: 0 0 5px #ff4c4cff;
            outline: none;
        }

        .register-box button {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 20px;
            background-color: #ff4c4cff;
            color: white;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.2s;
        }

        .register-box button:hover {
            background-color: #000426ff;
        }

        
    </style>

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
     <div class="register-box">
    <form method="post" action="">
        <fieldset>
            <legend style="font-size:40px">Register</legend><br/>
            <table class="register">
                <tr>
                    <td style="padding-left:30px;padding-right: 40px;">Nama Lengkap:</td>
                    <td><input type="text" name="nama_lengkap" required></td>
                </tr>
                <tr>
                    <td style="padding-left:30px;">Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td style="padding-left:30px;">Tanggal Lahir:</td>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td style="padding-left:30px;">Email:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td style="padding-left:30px;">Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="register" value="Register" class="save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    </div>
    </main>


<footer class="my-footer">
    <p class="footer-title">DoReMiSing © 2025</p>
    <p class="footer-creator">Created by Chaylene Faith</p>
    <p class="footer-tagline">"Feel the Beat, Live the Melody."</p>
</footer>



</body>
</html>
