<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang di Indomart';
    }

    public function about(){
        return view('about');
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
