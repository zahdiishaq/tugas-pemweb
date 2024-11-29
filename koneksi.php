<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "Database"; 

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);
  
// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
