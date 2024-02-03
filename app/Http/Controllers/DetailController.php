<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetailPBB;

class DetailController extends Controller
{

    // public function index(){
    //     $data['page']='DETAIL PBB';
    //     $data['detail_pbb']=DetailPBB::all();
    //     return view('transpbb.detail', $data);
    // }

    public function tambahdetail(){
        $data['page']='TAMBAH DETAIL MATERIAL';
        return view('transpbb.detail', $data);
    }

    public function createdetail(Request $request){
        $data = [
            'id_master_pbb' => $request->idmaster,
            'id_barang'     => $request->kode,
            'qty'           => $request->qty,
            'tujuangudang'  => $request->tujuangudang,
            'tanggal'       => $request->tanggal
        ];
        
        MasterPBB::insert($data);
        
        return redirect('/transpbb');
    }
}