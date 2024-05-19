<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    //
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('karyawan'),['title'=> 'Data Karyawan']);
        
    }
}
