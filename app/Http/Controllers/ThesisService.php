<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesisService extends Controller
{
    public function getAll() {
        return response()->json(Thesis::all());
    }

    public function getById(Request $request) {
        return response()->json(Thesis::find($request->id));
    }
}
