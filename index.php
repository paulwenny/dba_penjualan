<?php
$conn = mysqli_connect("localhost", "root", "", "db_penjualan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Table Transaksi</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>Nama Konsumen</th>
                <th>Tanggal</th>
                <th>Graund Total</th>
                <th>Nama Kasir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $tampildata = mysqli_query($conn, "SELECT * FROM tb_penjualan");
                while($data = mysqli_fetch_array($tampildata)){
            ?>

            <tr>
                <td><?= $data['nomor_transaksi'] ?></td>
                <td><?= $data['nama_konsumen'] ?></td>
                <td><?= $data['tanggal_transaksi'] ?></td>
                <td><?= $data['grend_total'] ?></td>
                <td><?= $data['nama_kasir'] ?></td>
                <td><a href="invois.php">Detail</a></td>
            </tr>
            <?php
                }
            ?>

        </tbody>
    </table>
</body>

</html>