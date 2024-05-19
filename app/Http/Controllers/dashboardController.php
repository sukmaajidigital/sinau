<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index (){
        $datakaryawan = karyawan::all();
        
        $totalkaryawan = Karyawan::count();
        return view('dashboard.index',compact('datakaryawan'),[
            'title'=> 'Dashboard',
            'totalkaryawan'=>$totalkaryawan
        ]);
        
    }
}
