<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="<?php echo e(url('contoh')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>
</body>
</html>

<!-- Main Content -->
<div class="main-content">
    <header>
        <h1>Selamat Datang di Dashboard Penjualan</h1>
    </header>

    <!-- Stats Cards -->
    <div class="cards">
        <div class="card">
            <h3>Total Produk</h3>
           <p id="total-products"><?php echo e($totalproducts); ?></p>
        </div>
        <div class="card">
            <h3>Penjualan Hari Ini</h3>
            <p id="sales-today"><?php echo e($salesToday); ?></p>
        </div>
        <div class="card">
            <h3>Total Pendapatan</h3>
            <p id="total-revenue"><?php echo e($totalRevenue); ?></p>
        </div>
        <div class="card">
            <h3>Pengguna Terdaftar</h3>
            <p id="registered-users">350</p>
        </div>
    </div>

    <div class="alert alert-primary" role="alert">
        A simple primary alert - check it out!
    </div>

    <!-- Sales Chart -->
    <div id="chart">
        <h2>Grafik Penjualan Bulanan</h2>
        <canvas id="salesChart"></canvas>
    </div>
</div>

<!--<script src="script.js"></script>-->
</body>
</html>
<?php /**PATH C:\.KULIYAH\.SEMESTER 5\WEBINTER\BelajarLaravel\resources\views/contoh.blade.php ENDPATH**/ ?>