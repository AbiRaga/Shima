<?php

namespace App\Http\Controllers;

use App\Models\produk;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){

        $data = produk::all();
        return view('welcome', compact('data'));
    }

    public function detail(Request $request, produk $produk){
        return view('main',compact('produk'));
    }

    public function login(){
        return view('login');
    }
}
