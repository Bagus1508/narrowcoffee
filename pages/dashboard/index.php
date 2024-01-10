<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Narrow Cafe</title>
    <link rel="stylesheet" href="../src/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'partials/dashboard/sidebar.php' ?>
    <?php
        // Lakukan koneksi ke database
        include 'config.php';

        $query = "SELECT COUNT(*) as total FROM orders";
        $result = mysqli_query($conn, $query);

        // Ambil hasil query
        $row = mysqli_fetch_assoc($result);
        $totalData = $row['total'];
    ?>
    <section class="contentDashboard">
        <div>
            <div class="header">
                Dashboard
            </div>
        </div>
        <div class="card">
            <div>
                Total Pesanan
            </div>
            <div>
                <?php echo $totalData; ?> Pesanan
            </div>
        </div>
    </section> 
</body>
<script src="../src/script/script.js"></script>
</html>