<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('style/footer.css')); ?>">
  <title>Halaman Beranda</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed d-flex flex-column min-vh-100">
    <div class="wrapper flex-grow-1"> <?php echo $__env->make('layout.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="content-wrapper p-3">
            <section class="content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </section>
        </div>
        
    </div> <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
<?php /**PATH C:\laragon\www\YOGA\Ujian_YOGA\resources\views/layout/master.blade.php ENDPATH**/ ?>