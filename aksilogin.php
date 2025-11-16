<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'koneksi.php';

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

// Ambil nama lengkap dari tabel register berdasarkan username
$query = mysqli_query($koneksi, "SELECT nama_lengkap FROM register WHERE username='$username'");
$data = mysqli_fetch_assoc($query);
$nama_lengkap = $data['nama_lengkap'] ?? ''; // kalau kosong tetap jalan

// Catat waktu login
$waktu_login = date('Y-m-d H:i:s');

// Simpan ke tabel login (tanpa password)
$sql = "INSERT INTO login (username, nama_lengkap, waktu_login)
        VALUES ('$username', '$nama_lengkap', '$waktu_login')";

if (mysqli_query($koneksi, $sql)) {
    // Setelah tersimpan, pindah ke info.php
    header("Location: info.php");
    exit();
} else {
    echo "Gagal menyimpan data login: " . mysqli_error($koneksi);
}
?>
