@extends('layout.master')
@section('content')

<body>
    <h1>Update Produk</h1>
    <a href="/produk" class="btn-back">
        <span class="icon">&larr;</span> Kembali ke Produk
    </a>
    <div class="card p-4">
        <form action="/produk/update/{{ $produk->id_produk }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $produk->nama_produk }}">
                @error('nama_produk')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">
                @error('harga')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    @foreach($data_kategori as $kategori)
                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                @error('gambar')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
@endsection