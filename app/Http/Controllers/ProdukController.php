<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $search =$request->keyword;
        
        $produk = Produk::when($search,function($query,$search){
            return $query->where('nama_produk','like',"%{$search}%");
        },function($query){
            return $query;
        });
        return view('pages.produk.showP',[
            'produk' => $produk->get(),
             'keyword' => $search
        ]);
    }

    public function create ()
    {
        $data_kategori = Kategori::all();
        return view('pages.produk.addP', compact('data_kategori'));
    }
    
    public function store (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_produk'      => 'required|unique:produks,nama_produk',
            'harga'            => 'required|numeric',
            'kategori_id'      => 'required',
            'deskripsi_produk' => 'required',
            'gambar'           => 'nullable|image|max:2048',
        ],[
            'nama_produk.required'       =>'nama produk wajib di isi',
            'nama_produk.unique'         =>'Nama produk ini sudah digunakan, silakan gunakan nama lain atau berikan no seri berbeda.',
            'kategori_id.required'       =>'Kategori wajib di pilih',
            'harga.required'             =>'masukan format harga yg benar',
            'deskripsi_produk.required'  =>'Deskripsi wajib diisi',
        ]);

        $lastProduct = Produk::orderBy('kode_produk', 'desc')->first();
        $lastNumber  = $lastProduct ? (int) substr($lastProduct->kode_produk, 3) : 0; 
        $nextCode    = 'A' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        // 3. Logika Upload Gambar
        $nama_file = null; 
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('gambar', $nama_file, 'public');
        }

        // Simpan ke database
        Produk::create([
            'kode_produk'      => $nextCode,
            'nama_produk'      => $request->nama_produk,
            'harga'            => $request->harga,
            'kategori_id'      => $request->kategori_id,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar'           => $nama_file, // Gunakan variabel yang sudah diisi di atas
        ]);

    return redirect('/produk')->with('success', 'Produk berhasil ditambahkan!');
        // dd($request->all());
    }

    public function show ($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.produk.detailP', compact('produk'));
    }

    public function edit ($id)
    {
        $produk = Produk::findOrFail($id);
        $data_kategori = Kategori::all();
        return view('pages.produk.updateP', compact('produk','data_kategori'));
    }
    public function update (Request $request, $id)
    {
        $request->validate([
            'nama_produk'      => 'required|unique:produks,nama_produk,' . $id . ',id_produk',
            'harga'            => 'required|numeric',
            'kategori_id'      => 'required',
            'deskripsi_produk' => 'required',
            'gambar'           => 'nullable|image|max:2048',
        ],[
            'nama_produk.required'       =>'nama produk wajib di isi',
            'nama_produk.unique'         =>'Nama produk ini sudah digunakan, silakan gunakan nama lain atau berikan no seri berbeda.',
            'kategori_id.required'       =>'Kategori wajib di pilih',
            'harga.required'             =>'masukan format harga yg benar',
            'deskripsi_produk.required'  =>'Deskripsi wajib diisi',
        ]);

        $produk = Produk::findOrFail($id);

        // Logika Upload Gambar
        $nama_file = $produk->gambar; 
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('gambar', $nama_file, 'public');
        }

        // Update data produk
        $produk->update([
            'nama_produk'      => $request->nama_produk,
            'harga'            => $request->harga,
            'kategori_id'      => $request->kategori_id,
            'deskripsi_produk' => $request->deskripsi_produk,
            'gambar'           => $nama_file, // Gunakan variabel yang sudah diisi di atas
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy ($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }

}
