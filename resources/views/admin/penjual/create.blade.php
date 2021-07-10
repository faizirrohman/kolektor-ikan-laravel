@extends('layouts.admin', ['title' => 'ADMIN | Tambah Data'])

@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
            <div class="header-body">
                  <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Penjual</h6>
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">Data Penjual</li>
                                    </ol>
                              </nav>
                        </div>
                  </div>
            </div>
      </div>
</div>
<div class="container-fluid mt--6">
      <div class="row">
            <div class="col">
                  <div class="card">
                        <div class="card-header card-header-primary">
                              <h1 class="title">Data Penjual</h1>
                        </div>
                        <form action="{{ route('admin.data-penjual.store') }}" method="POST">
                              @csrf
                              <div class="form-group col-12">
                                    <label for="nama_penjual" class="form-control-label">Nama Penjual</label>
                                    <input class="form-control" type="text" name="nama_penjual" placeholder="Nama Penjal">
                                    @error('nama_penjual')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                          <option>Pilih</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="alamat" class="form-control-label">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" id="" cols="10" rows="5"></textarea>
                                    @error('alamat')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="no_telp" class="form-control-label">No. Telp</label>
                                    <input class="form-control" type="number" name="no_telp" placeholder="No. Telp">
                                    @error('no_telp')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                                </div>
                              <div class="card-header card-header-primary">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('admin.data-penjual.index') }}" class="btn btn-danger">Cancel</a>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
@endsection