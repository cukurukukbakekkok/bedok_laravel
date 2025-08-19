<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // inisialisasi nama tabel
   protected $table = 'tb_produk';  
    
   // inisialisasi primary key
   protected $primaryKey = 'id_produk';

   // inisialisasi fillable
   // protected $fillable = ['nama_produk', 'harga', 'stok', 'deskripsi'];
   // inisialisasi guarded
    protected $guarded = ['id_produk'];

}
