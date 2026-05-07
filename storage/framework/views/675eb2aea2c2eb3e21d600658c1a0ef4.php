

<?php $__env->startSection('content'); ?>
  <body>
    <div class="container mt-4">
      <h1 class="mb-4">Detail Produk</h1>
      <a href="/produk" class="btn-back mb-3">
        <span class="icon">&larr;</span> Kembali
    </a>
        <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo e(asset('storage/gambar/' . $produk->gambar)); ?>" class="img-fluid rounded-start" alt="Gambar Produk">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"><?php echo e($produk->nama_produk); ?></h5>
                <p class="card-text"><?php echo e($produk->deskripsi_produk); ?></p>
                <p class="card-text"><strong>Harga:</strong> Rp <?php echo e(number_format($produk->harga, 0, ',', '.')); ?></p>
                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\YOGA\Ujian_YOGA\resources\views/pages/produk/detailP.blade.php ENDPATH**/ ?>