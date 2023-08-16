<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Ukm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswa_count = Mahasiswa::count();
        $ukm_count = Ukm::count();

        return view('dashboard', compact('mahasiswa_count', 'ukm_count'));
    }
}
