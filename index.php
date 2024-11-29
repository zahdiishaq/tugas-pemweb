<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>  
    <h2>Form Buku Tamu</h2>
    <form action="proses.php" method="POST"> --
        <label>Nama:</label><br>
        <input type="text" name="nama" required maxlength="200"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required maxlength="50"><br><br>

        <label>Isi Pesan:</label><br>
        <textarea name="isi" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
