@extends('layout')

@section('content')
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Login</h1>
                  </div>
                  <p>Portofolio Alghany</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <form action="{{ route('login') }}" method="post" class="form-validate mb-12" style="width: 400px;">
                @csrf
                @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
            <div class="col-lg-12">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <div class="form-group">
                      <input id="login-username" type="text" name="email" required data-msg="Please enter your email" class="input-material">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                  <br><small>Do not have an account? </small><a href="{{ route('register') }}" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection