<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function main(){
        $data['page']="DASHBOARD";
        return view('template.index', $data);
    }
    public function gudangbaut(){
        $data['page']='GUDANG BAUT';
        return view('gudang.gudangbaut', $data);
    }

    
}
