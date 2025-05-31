<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Magang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = array(
            "title"                   => "Dashboard",
            "menuDashboard"           => "active",
            "jumlahUser"              => User::count(),
            "jumlahAdmin"             => User::where('jabatan', 'Admin')->count(),
            "jumlahMahasiswa"         => User::where('jabatan', 'Mahasiswa')->count(),
            "jumlahMagang"            => Magang::count(),
            "jumlahBelumMagang"       => User::where('jabatan', 'Mahasiswa')->whereNotIn('id', Magang::select('user_id')->get())->count()
        );

        return view('dashboard', $data);
    }
}
