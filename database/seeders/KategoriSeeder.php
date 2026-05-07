<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('kategori')->insert([
            [
                'nama_kategori'=>'Fashion',
                'deskripsi'    =>'Barang fashion dengan kualitas terbaik'
            ],[
                'nama_kategori'=>'Elektronik',
                'deskripsi'    =>'Barang elektronik dengan kualitas terbaik'
            ],
        ]);
    }
}
