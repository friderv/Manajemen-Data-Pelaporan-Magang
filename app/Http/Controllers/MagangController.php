<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Magang;
use Illuminate\Http\Request;
use App\Exports\MagangExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class MagangController extends Controller
{
     public function index(){
        $user = Auth::user();

        if($user->jabatan=='Admin'){
            $data = array(
            'title'               => 'Data Magang',
            'menuAdminMagang'     => 'active',
            'magang'              => Magang::with('user')->get(),
            );
            return view('admin/magang/index', $data);
        }else{
             $data = array(
            'title'               => 'Data Magang',
            'menuMahasiswaMagang' => 'active',
            'magang'              => Magang::with('user')->where('user_id', $user->id)->first(),
            );
            return view('mahasiswa/magang/index', $data);
        }
        
    }

    public function create(){
        $data = array(
            'title'            => 'Tambah Data Magang',
            'menuAdminMagang'  => 'active',
            'user'             => User::where('jabatan', 'Mahasiswa')->where('is_magang', false)->get(),
        );
        return view('admin/magang/create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'user_id'            => 'required',
            'magang'             => 'required',
            'tanggal_mulai'      => 'required',
            'tanggal_selesai'    => 'required',
        ],[
            'user_id.required'          => 'User harus dipilih.',
            'magang.required'           => 'Status magang harus dipilih.',
            'tanggal_mulai.required'    => 'Tanggal mulai harus diisi.',
            'tanggal_selesai.required'  => 'Tanggal selesai harus diisi.',
        ]
        );

        $magang = new Magang;
        $magang->user_id                    = $request->user_id;
        $magang->magang                     = $request->magang;
        $magang->tanggal_mulai              = $request->tanggal_mulai;
        $magang->tanggal_selesai            = $request->tanggal_selesai;
        $magang->save();

        return redirect()->route('magang')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'            => 'Edit Data Magang',
            'menuAdminMagang'  => 'active',
            'magang'           =>  Magang::with('user')->findOrFail($id),
        );
        return view('admin/magang/update', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'magang'             => 'required',
            'tanggal_mulai'      => 'required',
            'tanggal_selesai'    => 'required',
        ],[
            'magang.required'           => 'Status magang harus dipilih.',
            'tanggal_mulai.required'    => 'Tanggal mulai harus diisi.',
            'tanggal_selesai.required'  => 'Tanggal selesai harus diisi.',
        ]
        );
        $magang = Magang::findOrFail($id);
        $magang->magang                     = $request->magang;
        $magang->tanggal_mulai              = $request->tanggal_mulai;
        $magang->tanggal_selesai            = $request->tanggal_selesai;
        $magang->save();

        return redirect()->route('magang')->with('success', 'Data Berhasil Di Edit');
    }

    public function destroy($id){
        $magang = Magang::findOrFail($id);
        $magang->delete();

        return redirect()->route('magang')->with('success', 'Data Berhasil Dihapus');

    }
    public function excel(){
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new MagangExport, 'DataMagang_'.$filename.'.xlsx');
    }

    public function pdf(){
        $user = Auth::user();
        $filename = now()->format('d-m-Y_H.i.s');
        if ($user->jabatan=='Admin') {
            $data = array(
            'magang'    => Magang::with('user')->get(),
            'tanggal'   => now()->format('d-m-Y'),        
            'jam'       => now()->format('H.i.s'),  
            );        
            $pdf = Pdf::loadView('admin/magang/pdf', $data);
            return $pdf->setPaper('a4', 'landscape')->stream('DataMagang_'.$filename.'.pdf');
        } else {
            $data = array(
            'tanggal'   => now()->format('d-m-Y'),        
            'jam'       => now()->format('H.i.s'),
            'magang'    => Magang::with('user')->where('user_id', $user->id)->first(),  
            );        
            $pdf = Pdf::loadView('mahasiswa/magang/pdf', $data);
            return $pdf->setPaper('a4', 'portrait')->stream('DataMagang_'.$filename.'.pdf');
        }
        
        
    }
}
