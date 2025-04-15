<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all(); // ambil dummy data
        return view('pengguna.index', compact('pengguna')); // lempar ke view
    }

    public function edit($id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        // Dummy update → tampilkan data barunya
        return view('pengguna.updated', compact('data'));
    }

    public function destroy($id)
    {
        // Dummy delete → tampilkan pesan
        return view('pengguna.deleted', compact('id'));
    }
}
