<?php
$nama = $_POST['nama'];
$judul = $_POST['judul_buku'];

$koneksi = mysqli_connect ('localhost', 'root', '', 'perpustakaan');
$sql = "INSERT INTO peminjaman ('nama', 'judul') VALUES ('$nama', '$judul')";

mysqli_query ($koneksi, $sql);

header("location: form.php");
exit;