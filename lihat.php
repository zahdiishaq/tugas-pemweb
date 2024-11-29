<?php include('koneksi.php'); ?>

<!DOCTYPE html>
<html>
<head>    
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h2>Data Buku Tamu</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
        </tr>
        <?php
        $sql = "SELECT * FROM buku_tamu";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID_BT']}</td>
                        <td>{$row['NAMA']}</td>
                        <td>{$row['EMAIL']}</td>
                        <td>{$row['ISI']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data!</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Tambah Data</a>
</body>
</html>
