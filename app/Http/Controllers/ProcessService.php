<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class ProcessService extends Controller
{
    public function start() {
        return view('dashboard');
    }

    public function store(Request $request) {


//        $studentName = $request->namaStudent;
//        $thesisName = $request->judulThesis;
//
////        manggil API buat bikin student di database
//        $request = Request::create('/student/insert', 'GET');
//
//
//
//        $hasil = json_decode(Route::dispatch($request)->getContent());
//        @dd($hasil);
////        manggil API buat bikin thesis di database
//        $request = Request::create('/thesis/insert', 'GET');
//        $instance = json_decode(Route::dispatch($request)->getContent());


//        DB::table('mahasiswa');
    }
}
