<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        return view('koleksi.daftarKoleksi');
    }
    public function create(){
        return view('koleksi.registrasi');
    }
    public function store(Request $request){
        return view('koleksi.daftarKoleksi');
    }
    public function show(Collection $collection){
        return view('koleksi.infoKoleksi');
    }
}
