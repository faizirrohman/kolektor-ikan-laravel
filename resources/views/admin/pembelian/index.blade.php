@extends('layouts.admin', ['title' => 'ADMIN | Data Pembelian'])

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
                        <!-- Card header -->
                        <div class="card-header card-header-primary">
                              <h1 class="card-title ">Data Pembelian</h1>
                              <a href="{{ route('admin.data-pembelian.create') }}" class="btn btn-primary">Tambah Data</a>
                              <a target="blank" href="{{ route('admin.data-pembelian.printAll') }}" class="btn btn-success">Cetak Data</a>
                              <br>
                              @if ($message = Session::get('success'))
                                    <br>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          <strong>Success!</strong> {{ $message }}.
                                    </div>
                              @endif
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                              <br>
                              <table class="table align-items-center table-flush"  id="example">
                                    <thead class="thead-light">
                                          <tr>
                                                <th scope="col" class="sort" data-sort="name">No</th>
                                                <th scope="col" class="sort" data-sort="budget">Foto</th>
                                                <th scope="col" class="sort" data-sort="budget">Jenis Ikan</th>
                                                <th scope="col" class="sort" data-sort="budget">Nama Penjual</th>
                                                <th scope="col" class="sort" data-sort="budget">Harga</th>
                                                <th scope="col" class="sort" data-sort="budget">Tanggal Pembelian</th>
                                                <th scope="col">Action</th>
                                          </tr>
                                    </thead>
                                    <tbody class="list">
                                          @foreach ($pembelian as $item)
                                          <tr>
                                                <td class="budget">{{ $loop->iteration }}</td>
                                                <td class="budget"><img src="{{ asset('foto/'.$item->foto_ikan) }}" width="80px" height="80px" alt="" srcset=""></td>
                                                <td class="budget">{{ $item->jenisIkan['jenis_ikan'] }}</td>
                                                <td class="budget">{{ $item->namaPenjual['nama_penjual'] }}</td>
                                                <td class="budget">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                                                <td class="budget">{{ $item->tanggal_pembelian }}</td>
                                                <td class="text-right">
                                                      <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                  <a class="dropdown-item" href="{{ route('admin.data-pembelian.edit' , $item->id) }}">Edit</a>
                                                                  <a class="dropdown-item" href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action' , '{{ route('admin.data-pembelian.destroy', $item->id) }}')">Hapus</a>
                                                            </div>
                                                      </div>
                                                </td>
                                          </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                              <br>
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="modal fade" id="modalDelete">
      <div class="modal-dialog modal-sm">
            <div class="modal-content">
                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                              <span aria-hidden="true"></span>
                        </button>
                        <h4 class="modal-title">Anda yakin akan menghapus data ini?</h4>
                  </div>
                  <div class="modal-footer">
                        <form action="" id="formDelete" method="get">
                              <button class="btn btn-danger" type="submit">Ya</button>
                              <button class="btn btn-default" data-dismiss="modal" >Tidak</button>
                        </form>
                  
                  </div>  
            </div>
      </div>
</div>

@endsection