<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title'         => 'Data User',
            'menuAdminUser' => 'active',
            'user'          => User::orderBy('jabatan', 'asc')->get(),
        );
        return view('admin/user/index', $data);
    }

    public function create(){
        $data = array(
            'title'         => 'Tambah Data User',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/create', $data);
    }

    public function store(Request $request){
        $request->validate([
                'nama'            => 'required|string|max:255',
                'npm'             => 'nullable|string|max:255|unique:users,npm',
                'email'           => 'required|string|email|max:255|unique:users,email',
                'jabatan'         => 'required|string|max:255',
                'password'        => 'required|string|min:8|confirmed',
                'semester'        => 'nullable|integer|min:1|max:20',
                'nama_perusahaan' => 'nullable|string|max:255',
        ],[
            'nama.required'           => 'Nama harus diisi.',
            'npm.unique'              => 'NPM sudah terdaftar.',
            'email.required'          => 'Email harus diisi.',
            'email.email'             => 'Format email tidak valid.',
            'email.unique'            => 'Email sudah terdaftar.',
            'jabatan.required'        => 'Jabatan harus diisi.',
            'password.required'       => 'Password harus diisi.',
            'password.min'            => 'Password minimal 8 karakter.',
            'password.confirmed'      => 'Konfirmasi password tidak sama.',
            'semester.integer'        => 'Semester harus berupa angka.',
            'semester.min'            => 'Semester minimal 1.',
            'semester.max'            => 'Semester maksimal 20.',
            'nama_perusahaan.max'     => 'Nama perusahaan maksimal 255 karakter.'
        ]
        );

        $user = new User();
        $user->nama               = $request->nama;
        $user->npm                = $request->npm;
        $user->email              = $request->email;
        $user->jabatan            = $request->jabatan;
        $user->password           = Hash::make($request->password);
        $user->semester           = $request->semester;
        $user->nama_perusahaan    = $request->nama_perusahaan;
        $user->is_magang          = false;
        $user->save();

        return redirect()->route('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'         => 'Edit Data User',
            'menuAdminUser' => 'active',
            'user'          => User::findOrFail($id),
        );
        return view('admin/user/edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
                'nama'            => 'required|string|max:255',
                'npm'             => 'nullable|string|max:255|unique:users,npm,'.$id,
                'email'           => 'required|string|email|max:255|unique:users,email,'.$id,
                'jabatan'         => 'required|string|max:255',
                'password'        => 'nullable|string|min:8|confirmed',
                'semester'        => 'nullable|integer|min:1|max:20',
                'nama_perusahaan' => 'nullable|string|max:255',
        ],[
            'nama.required'           => 'Nama harus diisi.',
            'npm.unique'              => 'NPM sudah terdaftar.',
            'email.required'          => 'Email harus diisi.',
            'email.email'             => 'Format email tidak valid.',
            'email.unique'            => 'Email sudah terdaftar.',
            'jabatan.required'        => 'Jabatan harus diisi.',
            'password.min'            => 'Password minimal 8 karakter.',
            'password.confirmed'      => 'Konfirmasi password tidak sama.',
            'semester.integer'        => 'Semester harus berupa angka.',
            'semester.min'            => 'Semester minimal 1.',
            'semester.max'            => 'Semester maksimal 20.',
            'nama_perusahaan.max'     => 'Nama perusahaan maksimal 255 karakter.'
        ]
        );

        $user = User::with('magang')->findOrFail($id); 
        $user->nama               = $request->nama;
        $user->npm                = $request->npm;
        $user->email              = $request->email;
        $user->jabatan            = $request->jabatan;
        if ($request->jabatan == 'Admin'){
    // Hapus record magang jika ada
        if ($user->magang) {
        $user->magang->delete();
        }
        }
        if ($request->filled('password')){
            $user->password       =Hash::make($request->password);
        }
        $user->semester           = $request->semester;
        $user->nama_perusahaan    = $request->nama_perusahaan;
        $user->save();

        return redirect()->route('user')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id){
        $user = user::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'Data Berhasil Dihapus');

    }
    
    public function excel(){
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new UserExport, 'DataUser_'.$filename.'.xlsx');
    }

    public function pdf(){
        $filename = now()->format('d-m-Y_H.i.s');
        $data = array(
            'user'    => User::get(),
            'tanggal' => now()->format('d-m-Y'),        
            'jam'     => now()->format('H.i.s'),  
        );        
        $pdf = Pdf::loadView('admin/user/pdf', $data);
        return $pdf->setPaper('a4', 'landscape')->stream('DataUser_'.$filename.'.pdf');
    }
}
