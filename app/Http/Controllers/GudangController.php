<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;

class GudangController extends Controller
{
    public function gudang(){
        $data['page']='MASTER DATA GUDANG';
        $data['gudang']=Gudang::all();
        return view('gudang.index', $data);
    }
    

    public function create(){
        $data['page']='TAMBAH GUDANG';
        return view('gudang.addgudang', $data);
    }


    public function tambahgudang(Request $request){
        // dd($request);
        $data = [
            'nama_gudang' => $request->namagudang,
            'kode_gudang' => $request->kodegudang
        ];
        
        Gudang::insert($data);
        
        return redirect('/gudang');
    }
}

?>