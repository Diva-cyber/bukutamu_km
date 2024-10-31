<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
{
    $siswas = Siswa::all();
    return view('datasiswa.index', compact('siswas'));
}

public function create()
{
    return view('datasiswa.create');
}

public function store(Request $request)
{
    // Validasi data
    $validatedData = $request->validate([
        'nama' => 'required|string',
        'kelas' => 'required|string',
       'nisn' => 'required|string|unique:siswas,nisn',
        'alamat' => 'required|string',
        'tempat_tanggal_lahir' => 'required|date',
    ]);

    // Membuat record baru di tabel Siswa
    $siswa = Siswa::create($validatedData);

    return redirect()->route('datasiswa.index');
}


public function edit(Siswa $siswa){
    return view('datasiswa.edit', compact('siswa'));
}


public function update(Request $request, Siswa $siswa)
{
    $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'nisn' => 'required',
        'alamat' => 'required',
        'tempat_tanggal_lahir' => 'required',
    ]);

    $siswa->update($request->all());
    return redirect()->route('datasiswa.index')->with('success', 'Data siswa berhasil diperbarui');
}

public function destroy(Siswa $siswa)
{
    $siswa->delete();
    return redirect()->route('datasiswa.index')->with('success', 'Data siswa berhasil dihapus');
}

}
