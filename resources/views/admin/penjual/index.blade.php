@extends('layouts.admin', ['title' => 'ADMIN | Data Penjual'])

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
                        <!-- Card header -->
                        <div class="card-header card-header-primary">
                              <h1 class="card-title ">Data Penjual</h1>
                              <a href="{{ route('admin.data-penjual.create') }}" class="btn btn-primary">Tambah Data</a>
                              <a target="blank" href="{{ route('admin.data-penjual.printAll') }}" class="btn btn-success">Cetak Data</a>
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
                                                <th scope="col" class="sort" data-sort="budget">Nama Penjual</th>
                                                <th scope="col" class="sort" data-sort="budget">Jenis Kelamin</th>
                                                <th scope="col" class="sort" data-sort="budget">Alamat</th>
                                                <th scope="col" class="sort" data-sort="budget">No. Telp</th>
                                                <th scope="col">Action</th>
                                          </tr>
                                    </thead>
                                    <tbody class="list">
                                          @foreach ($penjual as $item)
                                          <tr>
                                                <td class="budget">{{ $loop->iteration }}</td>
                                                <td class="budget">{{ $item->nama_penjual }}</td>
                                                <td class="budget">{{ $item->jenis_kelamin }}</td>
                                                <td class="budget">{{ $item->alamat }}</td>
                                                <td class="budget">{{ $item->no_telp }}</td>
                                                <td class="text-right">
                                                      <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                  <a class="dropdown-item" href="{{ route('admin.data-penjual.edit' , $item->id) }}">Edit</a>
                                                                  <a class="dropdown-item" href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action' , '{{ route('admin.data-penjual.destroy', $item->id) }}')">Hapus</a>
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