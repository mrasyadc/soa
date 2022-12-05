<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class ProcessService extends Controller
{
    public function start() {

        $request = Request::create('/halo', 'GET');
        $instance = json_decode(Route::dispatch($request)->getContent());

        return view('dashboard', ['halo' => $instance]);
    }
}
