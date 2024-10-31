<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datatamu;

class DatatamuController extends Controller
{
    public function index(){
        $datatamus = Datatamu::all();
        return view('datatamu.index', compact('datatamus'));
    }

    public function create(){
        return view('datatamu.create');
    }

    public function store(Request $request){
        $messages = [
            'telepon.numeric' => 'Field telepon harus berupa angka.',
        ];

        $validateData = $request->validate([
            'nama' => 'string|required',
            'telepon' => 'required|numeric',
            'alamat' => 'string|required',
            'kepentingan' => 'string|required',
            'tanggal_bertamu' => 'date|required'
        ]);

        $Datatamu = Datatamu::create($validateData);
        return redirect()->route('datatamu.index');
    }

    public function edit(Datatamu $datatamu){
        return view('datatamu.edit', compact('datatamu'));
    }

    public function update(Request $request, $id)
{
    // Validasi input dari form
    $request->validate([
        'nama' => 'required|string|max:255',
        'telepon' => 'required|numeric',
        'alamat' => 'required|string|max:255',
        'kepentingan' => 'required|string|max:255',
        'tanggal_bertamu' => 'required|date',
    ]);

    // Cari data tamu berdasarkan ID
    $datatamu = Datatamu::findOrFail($id);

    // Update data tamu dengan data dari form
    $datatamu->nama = $request->input('nama');
    $datatamu->telepon = $request->input('telepon');
    $datatamu->alamat = $request->input('alamat');
    $datatamu->kepentingan = $request->input('kepentingan');
    $datatamu->tanggal_bertamu = $request->input('tanggal_bertamu');

    // Simpan perubahan
    $datatamu->save();

    // Redirect ke halaman yang diinginkan dengan pesan sukses
    return redirect()->route('datatamu.index')->with('success', 'Data berhasil diupdate.');
}


    public function destroy(Datatamu $datatamu){
        $datatamu->delete();
        return redirect()->route('datatamu.index');
    }
}
