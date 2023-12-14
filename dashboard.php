<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<body>
    <!-- Side navigation -->
    <div class="sidenav">
        <h2>Umum Kepegawaian</h2>
        <a href="#">HOME</a>
        <a href="#">DASHBOARD</a>
        <a href="#">SURAT MASUK</a>
        <a href="#">DISPOSISI SURAT MASUK</a>
        <a href="#">SURAT KELUAR</a>
        <a href="#">JABATAN</a>
        <a href="#">INSTANSI</a>
        <a href="logout.php">LOGOUT</a>
    </div>

    <!-- Page content -->
    <div class="main">
        
    </div>

</body>

</html>