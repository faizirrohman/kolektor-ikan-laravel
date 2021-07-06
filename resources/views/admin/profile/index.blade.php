@extends('layouts.admin', ['title' => 'ADMIN | Profile'])

@section('content')

<!-- Main content -->
<div class="main-content" id="panel">
      <div class="header bg-primary pb-0">
            <div class="container-fluid">
                  <div class="header-body">
                        <div class="row align-items-center">
                              <div class="col-lg-6 col-7">
                                    <h6 class="h2 text-white d-inline-block mb-0">Profile</h6>
                                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                          <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                          </ol>
                                    </nav>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="header pb-6 d-flex align-items-center" style="min-height: 300px;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                  <div class="row">
                        <div class="col-lg-12 col-md-10">
                              <h1 class="display-3 text-white">{{ auth()->user()->name }}</h1>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
            <div class="row">
                  <div class="col-xl-4 order-xl-2">
                        <div class="card card-profile">
                              <img src="{{ asset('assets/img/bg.jpg')}}" alt="Image placeholder" class="card-img-top">
                              <div class="row justify-content-center">
                                    <div class="col-lg-3 order-lg-2">
                                          <div class="card-profile-image">
                                                <a href="">
                                                      <img src="{{ asset('assets/img/user.png') }}" class="rounded-circle">
                                                </a>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                    <div class="d-flex justify-content-between">
                                          <a href="#" >.</a>
                                          <a href="#" >.</a>
                                    </div>
                              </div>
                              <div class="card-body pt-0">
                                    <div class="text-center">
                                          <h5 class="h3">
                                                {{ auth()->user()->name }}
                                          </h5>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-xl-8 order-xl-1">
                        <div class="card">
                              <div class="card-header">
                                    <div class="row align-items-center">
                                          <div class="col-8">
                                                <h3 class="mb-0">Profile </h3>
                                          </div>
                                    </div>
                              </div>
                              <div class="card-body">
                                    <form>
                                          <div class="pl-lg-4">
                                                <div class="row">
                                                      <div class="col-md-12">
                                                            <div class="form-group">
                                                                  <label class="form-control-label" for="input-address">Nama</label>
                                                                  <input id="input-address" class="form-control" placeholder="Home Address" value="{{ auth()->user()->name }}" type="text" readonly>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                            <div class="form-group">
                                                                  <label class="form-control-label" for="input-address">Email</label>
                                                                  <input id="input-address" class="form-control" placeholder="Home Address" value="{{ auth()->user()->email }}" type="text" readonly>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection