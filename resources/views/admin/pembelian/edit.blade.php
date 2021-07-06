@extends('layouts.admin', ['title' => 'ADMIN | Edit Data'])

@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
            <div class="header-body">
                  <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pembelian</h6>
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">Data Pembelian</li>
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
                              <h1 class="title">Edit Data Pembelian</h1>
                        </div>
                        <form action="{{ route('admin.data-pembelian.update', $pembelian->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <br>
                              <div class="form-group col-12">
                                    <img src="{{ asset('foto/'.$pembelian->foto_ikan) }}" style="width: 150px; height: 150px;" alt="">
                                    <br>
                                    <label for="foto_ikan" class="form-control-label">Foto</label>
                                    <input class="form-control" type="file" name="foto_ikan" placeholder="Nama Penjual">
                              </div>
                              <div class="form-group col-12">
                                    <label for="id_ikan" class="form-control-label">Jenis Ikan</label>
                                    <select name="id_ikan" class="form-control">
                                          <option disabled>Pilih</option>
                                          @foreach ($jenisIkan as $item)
                                                <option value="{{ $item->id }}">{{ $item->jenis_ikan }}</option>
                                          @endforeach
                                    </select>
                                    @error('id_ikan')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="id_penjual" class="form-control-label">Nama Penjual</label>
                                    <select name="id_penjual" class="form-control">
                                          <option disabled>Pilih</option>
                                          @foreach ($penjual as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_penjual }}</option>
                                          @endforeach
                                    </select>
                                    @error('id_penjual')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="harga" class="form-control-label">Harga</label>
                                    <input class="form-control" type="number" name="harga" value="{{ $pembelian->harga }}" placeholder="Harga">
                                    @error('harga')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="form-group col-12">
                                    <label for="tanggal_pembelian" class="form-control-label">Tanggal Pembelian</label>
                                    <input class="form-control" type="date" name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" placeholder="Tanggal Pembelian">
                                    @error('tanggal_pembelian')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="card-header card-header-primary">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          Update
                                    </button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">Perubahan selesai</div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Save Perubahan</button>
                  </div>
            </div>
      </div>
</div>
@endsection