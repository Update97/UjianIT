@extends('layout.master')

@section('content')
  <body>
    <div class="container mt-4">
      <h1 class="mb-4">Data Produk</h1>
      <a href="/produk/create" type="button" class="btn btn-dark mb-3">† Tambah Data</a>
        @if (@session('success'))
            <div class="alert alert-info mb-2">{{ session('success') }}</div>
        @endif
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                Daftar Produk
                <div class="d-flex gap-2" style="margin-left: 50%">
                    @if (Request()->keyword != '')
                        <a href="/produk" class="btn btn-outline-success">Reset</a>
                    @endif
                    <form class="input-group" style="width: 350px">
                        <input type="text" class="form-control" name="keyword" placeholder="Cari data Produk"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="/produk/detail/{{ $item->id_produk }}" class="btn btn-info">Detail</a>
                                <a href="/produk/edit/{{ $item->id_produk }}" class="btn btn-warning">Edit</a>
                               <form action="/produk/{{ $item->id_produk }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <!-- Tambahkan data produk lainnya di sini -->
                         @endforeach
                    </tbody>
                </table>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
@endsection