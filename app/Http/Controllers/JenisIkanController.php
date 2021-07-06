<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;

class JenisIkanController extends Controller
{
    public function index()
    {
        $jenisIkan = Ikan::latest()->get();
        return view('admin.jenisIkan.index', compact('jenisIkan'));
    }

    public function create()
    {
        return view('admin.jenisIkan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_ikan' => 'required',
        ]);
        Ikan::create($request->all());
        return redirect()->route('admin.jenis-ikan.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $jenisIkan = Ikan::findOrFail($id);
        return view('admin.jenisIkan.edit', compact('jenisIkan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_ikan' => 'required',
        ]);
        Ikan::findOrFail($id)->update($request->all());
        return redirect()->route('admin.jenis-ikan.index')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $data = Ikan::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.jenis-ikan.index')->with('success', 'Data berhasil dihapus');
    }

    public function printAll() {
        $jenisIkan = Ikan::latest()->get();
        return view('admin.jenisIkan.printAll',  compact('jenisIkan'));
    }
}
