<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
    // Ambil username dari session login.php
    $username = $_SESSION['username'];

    // Catat waktu login
    $waktu_login = date('Y-m-d H:i:s');

    // Simpan ke tabel login (tanpa nama_lengkap karena kolomnya nggak ada)
    $sql = "INSERT INTO login (username, waktu_login)
            VALUES ('$username', '$waktu_login')";

    if (mysqli_query($koneksi, $sql)) {
        // Pindah ke info.php
        header("Location: login.php");
        exit();
    } else {
        echo "Gagal menyimpan data login: " . mysqli_error($koneksi);
    }
} else {
    // Kalau gak ada session (belum login)
    header("Location: login.php");
    exit();
}
?>
