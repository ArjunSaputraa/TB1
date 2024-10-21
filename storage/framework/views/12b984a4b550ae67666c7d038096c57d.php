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
            <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header style="display: flex; justify-content: space-between;">
        </header>
        <div>
        <h1>Daftar Produk</h1>
        <p>Temukan Produk Terbaik Untuk kebutuhan Anda</p>
        </div>
        <div>
            <button class="card-button"><a class="text-decoration-none text-wh" href="<?php echo e(url('/produk/add')); ?>">Add Product</a></button>
        </div>

        <div class="product-grid">

            <!-- Product Cards -->
            <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 2">
                <h3><?php echo e($item->nama_produk); ?></h3>
                <p class="price"><?php echo e($item->harga); ?></p>
                <p class="description"><?php echo e($item->deskripsi); ?></p>
                <button class="card-button">Edit</button>
                <button class="card-button">Delete</button>

                <form action="<?php echo e(url('produk/delete/' . $item->kode_produk)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           <!-- <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 3">
                <h3>Produk 3</h3>
                <p class="price">Rp 300,000</p>
                <p class="description">Deskripsi singkat produk 3.</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>

            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 4">
                <h3>Produk 4</h3>
                <p class="price">Rp 400,000</p>
                <p class="description">Deskripsi singkat produk 4.</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>

        </div>
    </div>

    <!-- Footer -->
    
</body>

</html>
<?php /**PATH C:\.KULIYAH\.SEMESTER 5\WEBINTER\BelajarLaravel\resources\views/produk.blade.php ENDPATH**/ ?>