<?php
include 'koneksi.php';

$artist = $_GET['artist'];
mysqli_query($koneksi, "DELETE FROM info WHERE artist='$artist'");

header("Location: show.php");
?>