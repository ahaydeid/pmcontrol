<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterPBB;

class TransPBBController extends Controller
{
    public function index(){
        $data['page']='TRANSAKSI PBB';
        $data['master_pbb']=MasterPBB::all();
        return view('transpbb.index', $data);
    }

    public function tambahtrans(){
        $data['page']='TAMBAH TRANSAKSI';
        return view('transpbb.add_transpbb', $data);
    }
    
    
    public function createtrans(Request $request){

        $data = [
            'no_pbb'    => $request->nopbb,
            'tanggal'   => $request->tanggal,
            'pic'       => $request->pic,
            'supplier'  => $request->supplier
        ];
        
        DB::table('temp_master_pbb')->insert($data);
        
        return redirect('/detail');
    }
}


