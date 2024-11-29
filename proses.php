<?php
include('koneksi.php');

// Memeriksa apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama  = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $isi   = $conn->real_escape_string($_POST['isi']);

    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
        echo "<br><a href='index.php'>Kembali ke Form</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
  