@extends('layout.master')

@section('content')
  <body>
    <div class="container mt-4">
      <h1 class="mb-4">Detail Produk</h1>
      <a href="/produk" class="btn-back mb-3">
        <span class="icon">&larr;</span> Kembali
    </a>
        <div class="card mb-3">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/gambar/' . $produk->gambar) }}" class="img-fluid rounded-start" alt="Gambar Produk">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                <p class="card-text">{{ $produk->deskripsi_produk }}</p>
                <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
@endsection