<?php

namespace App\Http\Controllers;

use App\Models\karyawan;

use App\Http\Controllers\Controller;


class dashboardController extends Controller
{
    public function index (){
        $max_data =1;
        $datakaryawan = karyawan::all();
        
        $totalkaryawan = karyawan::count();
        return view('dashboard.index',compact('datakaryawan'),[
            'title'=> 'Dashboard',
            'totalkaryawan'=>$totalkaryawan
        ]);
        
    }
}
