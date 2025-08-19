<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function getProduk() {
        $data_toko = [
            'nama_toko' => 'Toko Bedok',
            'alamat' => 'Jalan Raya No. 123',
            'type' => 'ruko'
        ];

        // Kirim data ke view 'pages.product'
        return view('pages.product', $data_toko);
    }

    public function tambahProduk() {
        return view('pages.addProduct');
    }
}

