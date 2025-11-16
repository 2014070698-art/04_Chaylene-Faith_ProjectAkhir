<?php
include 'koneksi.php';

$artist = $_POST['artist'];
$genre = $_POST['genre'];
$song = $_POST['song'];
$album = $_POST['album'];
$many = $_POST['many'];
$why = $_POST['why'];

mysqli_query($koneksi, "UPDATE info set artist='$artist', genre='$genre', song= '$song',album= '$album', many= '$many',  why= '$why' where artist='$artist'");

header("Location:show.php");

?>