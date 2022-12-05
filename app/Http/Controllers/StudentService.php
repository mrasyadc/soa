<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentService extends Controller
{
    public function getAll() {
        return response()->json(Student::all());
    }

    public function getById(Request $request) {
        return response()->json(Student::find($request->id));
    }

}
