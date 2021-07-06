<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index()
    {
        $penjual = Penjual::latest()->get();
        return view('admin.penjual.index', compact('penjual'));
    }

    public function create()
    {
        return view('admin.penjual.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penjual' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        Penjual::create($request->all());
        return redirect()->route('admin.data-penjual.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $penjual = Penjual::findOrFail($id);
        return view('admin.penjual.edit', compact('penjual'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penjual' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        Penjual::findOrFail($id)->update($request->all());
        return redirect()->route('admin.data-penjual.index')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $data = Penjual::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.data-penjual.index')->with('success', 'Data berhasil dihapus');
    }

    public function printAll() {
        $penjual = Penjual::latest()->get();
        return view('admin.penjual.printAll',  compact('penjual'));
    }
}
