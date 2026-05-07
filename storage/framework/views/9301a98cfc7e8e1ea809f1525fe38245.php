<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujian IT | Yoga.Ant97</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/welcome.css')); ?>">

<style>

    </style>
</head>

<body>

    <div class="container">
        <h1>Selamat Datang</h1>
        <p>Silakan login untuk masuk ke aplikasi.</p>

        <?php if(Route::has('login')): ?>
        <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/home')); ?>" class="btn btn-black">Ke Dashboard</a>
        <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="btn btn-black">Log in</a>

        <?php if(Route::has('register')): ?>
        <a href="<?php echo e(route('register')); ?>" class="btn btn-outline">Daftar</a>
        <?php endif; ?>
        <?php endif; ?>
        <?php else: ?>
        <!-- Fallback jika route login belum ada -->
        <a href="/login" class="btn btn-black">Log in</a>
        <?php endif; ?>
    </div>

</body>

</html><?php /**PATH C:\laragon\www\YOGA\Ujian_YOGA\resources\views/welcome.blade.php ENDPATH**/ ?>