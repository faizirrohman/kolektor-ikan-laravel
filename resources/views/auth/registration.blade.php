@extends('layouts.auth', ['title' => 'ADMIN | Register'])

@section('content')
<!-- Page content -->
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border-0">
                      <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                  <small>Sign Up</small>
                            </div>
                            <form role="form" action="{{ route('register.custom') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Name" type="text" name="name" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Email" name="email" type="email" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for="customCheckLogin">
                                            <span class="text-muted">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-muted font-italic"><small>Sudah punya akun? <span class="text-success font-weight-700"><a href="{{route('login')}}">Login</a></span></small></div>
                                    <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-4">Sign Up</button>
                                    </div>
                            </form>
                      </div>
                </div>
          </div>
    </div>
</div>
@endsection