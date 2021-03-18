<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class TabulatorController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('tabulator', compact('students'));
        //return view('tabulator');
    }

    public function fetch(Request $request)
    {
        $valueofnrpcode = $request->get('ean');
        $students = Student::all();
        return response()->json($students);
    }
}
