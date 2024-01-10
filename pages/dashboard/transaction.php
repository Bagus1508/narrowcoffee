<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Transaksi</title>
    <link rel="stylesheet" href="../src/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'partials/dashboard/sidebar.php' ?>
    <section class="contentDashboard">
        <div>
            <div class="header">
                Transaksi
            </div>
        </div>
        <?php
            include 'config.php';
            $stmt = $conn->prepare('SELECT * FROM orders');
            $stmt->execute();
            $result = $stmt->get_result();
            $nomorUrut = 1;
            $totalPenjualan = 0;
        ?>
        <table class="tableContainer">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>No Pesanan</th>
                <th>Total Harga Pesanan</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()):
                $totalPenjualan += $row['amount_paid'];
            ?>
            <tr>
                <td><?= $nomorUrut ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['no_order'] ?></td>
                <td>Rp. <?= $row['amount_paid'] ?></td>
                <td><button id="myBtn<?= $row['id'] ?>" href="#">Lihat</button></td>
            </tr>

            <div id="myModal<?= $row['id'] ?>" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Detail Pesanan : <?= $row['no_order'] ?></h2>
                </div>
                <div class="modal-body">
                <p>Nama : <?= $row['name'] ?></p>
                <p>No Telepon : <?= $row['phone'] ?></p>
                <p>Pesanan : <?= $row['products'] ?></p>
                <p>Informasi Tambahan : <?= $row['address'] ?></p>
                <p>Metode Pembayaran : <?= $row['pmode'] ?></p>
                <h1>Total Pembayaran : Rp. <?= $row['amount_paid'] ?></h1>
                </div>
            </div>
            <script>
                document.getElementById('myBtn<?= $row['id'] ?>').addEventListener('click', function() {
                    var modal = document.getElementById('myModal<?= $row['id'] ?>');
                    modal.style.display = 'block';

                    var span = modal.querySelector('.close');
                    span.onclick = function() {
                        modal.style.display = 'none';
                    };

                    window.onclick = function(event) {
                        if (event.target === modal) {
                            modal.style.display = 'none';
                        }
                    };
                });
            </script>
            <?php $nomorUrut++; endwhile; ?>
            <tr>
                <td></td>
                <td><h1>Total Penjualan</h1></td>
                <td colspan="4">Rp. <?= $totalPenjualan ?> </td>
            </tr>
        </table>
    </section> 
</body>
<script src="../src/script/script.js"></script>
</html>