<?php

require_once("koneksi.php");

session_start();

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk membersihkan input dari potensi SQL injection
function clean_input($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Memproses login ketika form disubmit
if (isset($_POST['login'])) {
    $username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);

    // Query untuk mencari data user berdasarkan username dan password
    $query = "SELECT * FROM staff WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    // Memeriksa apakah data ditemukan
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        // Login berhasil, lakukan tindakan yang diperlukan, seperti redirect ke halaman lain
        echo "<script>alert('anda berhasil masuk'); window.location.href='dashboard.php';</script>";
    } else {
        // Login gagal
        echo "<script>alert('username atau password salah!'); window.location.href='index.php';</script>";
    }
}

// Tutup koneksi ke database
$conn->close();
?>