<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\PembelianIkan;
use App\Models\Penjual;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = PembelianIkan::with('jenisIkan', 'namaPenjual')->latest()->get();
        $jenisIkan = Ikan::orderBy('jenis_ikan', 'ASC')->get();
        $penjual = Penjual::orderBy('nama_penjual', 'ASC')->get();
        return view('admin.pembelian.index', compact('pembelian', 'jenisIkan', 'penjual'));
    }

    public function create()
    {
        $jenisIkan = Ikan::orderBy('jenis_ikan', 'ASC')->get();
        $penjual = Penjual::orderBy('nama_penjual', 'ASC')->get();
        return view('admin.pembelian.create', compact('jenisIkan', 'penjual'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_ikan' => 'required',
            'id_ikan' => 'required',
            'id_penjual' => 'required',
            'harga' => 'required',
            'tanggal_pembelian' => 'required',
        ]);

        $file = $request->foto_ikan;
        $namaFile = $file->getClientOriginalName();
        $file->move(public_path().'/foto', $namaFile);
        PembelianIkan::create([
            'foto_ikan' => $namaFile,
            "id_ikan" => $request->id_ikan,
            "id_penjual" => $request->id_penjual,
            "harga" => $request->harga,
            "tanggal_pembelian" => $request->tanggal_pembelian
        ]);
        
        return redirect()->route('admin.data-pembelian.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $pembelian = PembelianIkan::findOrFail($id);
        $jenisIkan = Ikan::orderBy('jenis_ikan', 'ASC')->get();
        $penjual = Penjual::orderBy('nama_penjual', 'ASC')->get();
        return view('admin.pembelian.edit', compact('pembelian', 'jenisIkan', 'penjual'));
    }

    public function update(Request $request, $id)
    {
        $pembelian = PembelianIkan::findOrFail($id);
        if($request->file('foto_ikan') != null && $request->hasFile('foto_ikan'))
        {
            $file = 'foto/'.$pembelian->foto_ikan;
            if(is_file($file))
            {
                unlink($file);
            }
            $file = $request->file('foto_ikan');
            $filename = $file->getClientOriginalName();
            $request->file('foto_ikan')->move('foto/', $filename);
            $pembelian->foto_ikan = $filename;
        }
        $pembelian->id_ikan = $request->id_ikan;
        $pembelian->id_penjual = $request->id_penjual;
        $pembelian->harga = $request->harga;
        $pembelian->tanggal_pembelian = $request->tanggal_pembelian;
        $pembelian->save();
        
        return redirect()->route('admin.data-pembelian.index')->with('success', 'Data berhasil diperbaharui');
    }

    public function destroy($id)
    {
        $data = PembelianIkan::findOrFail($id);
        $file = 'foto/'.$data->foto_ikan;
        if(is_file($file))
        {
            unlink($file);
        }
        $data->delete();
        
        return redirect()->route('admin.data-pembelian.index')->with('success', 'Data berhasil dihapus');
    }

    public function printAll() {
        $pembelian = PembelianIkan::with('jenisIkan', 'namaPenjual')->latest()->get();
        $jenisIkan = Ikan::orderBy('jenis_ikan', 'ASC')->get();
        $penjual = Penjual::orderBy('nama_penjual', 'ASC')->get();
        return view('admin.pembelian.printAll', compact('pembelian', 'jenisIkan', 'penjual'));
    }
}
