<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{

    function show(){
        $data['barang'] = Barang::all();
        return view('barang.index',$data);
    }
}
