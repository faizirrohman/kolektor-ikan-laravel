@extends('layouts.admin', ['title' => 'ADMIN | Edit Data'])

@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
            <div class="header-body">
                  <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Jenis Ikan</h6>
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                          <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">Jenis Ikan</li>
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
                              <h1 class="title">Edit Jenis Ikan</h1>
                        </div>
                        <form action="{{ route('admin.jenis-ikan.update', $jenisIkan->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <div class="form-group col-12">
                                    <label for="jenis_ikan" class="form-control-label">Jenis Ikan</label>
                                    <input class="form-control" type="text" name="jenis_ikan" value="{{ $jenisIkan->jenis_ikan }}" placeholder="Jenis Ikan">
                                    @error('jenis_ikan')
                                          <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                          </div>
                                    @enderror
                              </div>
                              <div class="card-header card-header-primary">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                          Update
                                    </button>
                                    <a href="{{ route('admin.jenis-ikan.index') }}" class="btn btn-danger">Cancel</a>
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