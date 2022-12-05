<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloService extends Controller
{
    // mau akses database boleh
    // tapi di sini cuma pengen nampilin halo aja
    public function halo() {
        return response()->json('halo');
    }
}
