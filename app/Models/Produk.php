<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    
    // Jika primary key di database kamu namanya 'id', baris ini tidak perlu.
    // Tapi jika namanya 'id_produk', pastikan di migrasi juga sama.
    protected $primaryKey = 'id_produk'; 

    // Gunakan fillable untuk kolom yang diinput dari form
    protected $fillable = [
        'kode_produk', 
        'nama_produk', 
        'harga', 
        'kategori_id', 
        'deskripsi_produk', 
        'gambar'
    ];
}