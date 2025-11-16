<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

$artist = $_POST['artist'];
$genre = $_POST['genre'];
$song = $_POST['song'];
$album = $_POST['album'];
$many = $_POST['many'];
$why = $_POST['why'];

mysqli_query($koneksi, "INSERT INTO info (artist, genre, song, album, many, why) VALUES ('$artist', '$genre', '$song', '$album', '$many', '$why')");

header("Location: show.php");
exit();

?>