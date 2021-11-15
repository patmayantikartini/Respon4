<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// //libarary validasi
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreNewBook; 

class BukuController extends Controller
{
    private function data()
    {
       $buku= new \stdClass();
       $buku->isbn = "978-623-224-389-7";
       $buku->judul = "Sirah Nabawiyah";
       $buku->author = "Ust. Apad Ruslan";
       $buku->tahun = 2020;

       $data [] =$buku;

       $buku= new \stdClass();
       $buku->isbn = "978-602-8997-74-1";
       $buku->judul = "Zikir dan Doa Nabi Shollallahu Alaihi Wa Sallam";
       $buku->author = "KH. Sulhan Abu Fitra";
       $buku->tahun = 2013;

       $data [] =$buku;

       $buku= new \stdClass();
       $buku->isbn = "978-623-244-327-3";
       $buku->judul = "Himpunan Nama Bayi Islam Terindah Sepanjang Masa";
       $buku->author = "Faizhatul Rizky";
       $buku->tahun = 2020;

       $data [] =$buku;
       return $data;
    }


    public function show(Request $request, $isbn)
    {
        $data = $this->data();
        $item=null;
        foreach($data as $buku){
            if($isbn == $buku->isbn){
                $item = $buku;
                break;
            }
        }
        return view('show-buku')->with('book',$item);
    }

    public function index()
    {
        $data = $this->data();
       return view('daftar-buku')->with('books', $data);

    }
    public function create()
    {
        return view('create-buku');
    }

    public function store(StoreNewBook $request)
    {
        $validated = $request->validated();
    
        //     'isbn' => 'required|max:50',
        //     'judul' => 'required',
        //     // 'isbn' => 'numeric',
        //     // 'judul' => 'text',
        // ]);
        // return $validatedData;
        return $validated;
    }
    
}
