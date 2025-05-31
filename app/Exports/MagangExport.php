<?php

namespace App\Exports;

use App\Models\Magang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MagangExport implements FromView
{
    public function view(): View
    {
        $data = array(
            'magang'    => Magang::with('user')->get(),
            'tanggal' => now()->format('d-m-Y'),        
            'jam'     => now()->format('H.i.s'),  
        );
        return view('admin/magang/excel', $data);
    }
}
