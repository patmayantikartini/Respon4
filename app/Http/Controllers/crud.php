<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class crud extends Controller
{
    public function tambah(){
        buku::create([
            'judul'=>'Pemrograman Web',
            'author'=>'Patmayanti Kartini',
            'tahun'=>'2021',
            'isbn'=>'123-455-4321',
            'penerbit'=>'UIN Alauddin Makassar'
        ]);
        return ('berhasil ditambah');
    }

    public function hai() {
        
    }
}
