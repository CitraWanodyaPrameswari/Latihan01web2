<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.daftarPengguna');
    }
    public function create(){
        return view('user.registrasi');
    }
    public function store(Request $request){
        return view('user.daftarPengguna');
    }
    public function show(User $user){
        return view('user.infoPengguna');
    }

}
