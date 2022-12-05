<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HaloService extends Controller
{
    // mau akses database boleh
    // tapi di sini cuma pengen nampilin halo aja
    public function halo() {
        return response()->json('halo');
    }

    public function insert(Request $request) {
        $name = $request->name;

        Student::insert(id, name);

        return response()->json('success');
    }


}
