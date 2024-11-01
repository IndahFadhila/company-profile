<?php

namespace App\Http\Controllers;

use App\Models\Karyawan; 
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $karyawans = Karyawan::where('nama_lengkap', 'like', '%' . $search . '%')
                ->orWhere('jabatan', 'like', '%' . $search . '%')
                ->get();
        } else {
            $karyawans = Karyawan::all();
        }

        return view('dashboard', compact('karyawans', 'search'));
    }




    public function create()
    {
        return view('create');
    }




    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', // Ubah di sini
        'no_hp' => 'required|string|max:255',
        'alamat' => 'required|string',
    ]);




    // Normalisasi nilai jenis_kelamin
    $validatedData['jenis_kelamin'] = $validatedData['jenis_kelamin'] === 'Laki-laki' ? 'l' : 'p';




    Karyawan::create($validatedData);
   
    return redirect()->route('dashboard')->with('success', 'Karyawan berhasil ditambahkan.');
}


public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('show', compact('karyawan'));
    }


    // Menampilkan form edit karyawan (EDIT)
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('edit', compact('karyawan'));
    }


    // Memperbarui data karyawan (UPDATE)
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan', // Validasi
            'no_hp' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);
   
        // Normalisasi nilai jenis_kelamin
        $validatedData['jenis_kelamin'] = $validatedData['jenis_kelamin'] === 'Laki-laki' ? 'l' : 'p';
       
        // Cari karyawan berdasarkan ID
        $karyawan = Karyawan::findOrFail($id);
   
        // Update menggunakan data yang sudah dinormalisasi
        $karyawan->update($validatedData);
   
        return redirect()->route('dashboard')->with('success', 'Data karyawan berhasil diperbarui.');
    }
   
    // Menghapus data karyawan (DELETE)
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('dashboard')->with('success', 'Data karyawan berhasil dihapus.');
    }
}
