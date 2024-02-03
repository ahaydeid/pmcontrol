<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $data['page']='MASTER DATA MATERIAL';
        $data['barang']=Barang::all();
        return view('barang.index', $data);
    }
    
    public function tambahbarang(){
        $data['page']='TAMBAH BARANG';
        return view('barang.addbarang', $data);
    }


    public function createbarang(Request $request){
        $data = [
            'code'          => $request->kode,
            'nama_barang'   => $request->nama,
            'kategori'      => $request->kategori,
            'satuan'        => $request->satuan
        ];
        
        Barang::insert($data);
        
        return redirect('/barang');


        //Request untuk menerima semua data yang masuk
        // cara3
    
        // $barang = new Barang();
        // $barang->code = $requst->kode;
        // $barang->nama_barang = $requst->nama;
        // $barang->satuan = $requst->satuan;
    
        // $barang->save();
        // Barang::create([
        //     'code'          => $requst->kode,
        //     'nama_barang'   => $requst->nama,
        //     'satuan'        => $requst->satuan
        // ]);

        // $data = [
        //     'code'          => $requst->kode,
        //     'nama_barang'   => $requst->nama,
        //     'satuan'        => $requst->satuan
        // ];

        // Barang::create($data);
        // cara 2
        // Barang::insert([
        //     'code'          => $requst->kode,
        //     'nama_barang'   => $requst->nama,
        //     'satuan'        => $requst->satuan
        // ]);

    }
}

?>