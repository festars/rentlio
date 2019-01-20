<!DOCTYPE html>
<html>

<head>
    @include('partials.brochure._head_login')
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome back!</h1>
              <p class="text-lead text-light">Use this awesome app to manage your properties or find an amazing one!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">

            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Sign in with your credentials</small>
              </div>
              <form method="POST" role="form" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input placeholder="Name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input placeholder="Confirm Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                        </div>
                    </div>

                    {{-- <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">
                        <span class="text-muted">Remember me</span>
                        </label>
                    </div> --}}

                    <h2>I am a...</h2>
                    <div class="custom-control custom-radio mb-3">
                      <input name="user_type" class="custom-control-input" id="realtor-radio" type="radio" value="realtor">
                      <label class="custom-control-label" for="realtor-radio">Realtor</label>
                    </div>

                    <div class="custom-control custom-radio mb-3">
                        <input name="user_type" class="custom-control-input" id="landlord-radio" type="radio" value="landlord">
                        <label class="custom-control-label" for="landlord-radio">Landlord</label>
                      </div>

                      <div class="custom-control custom-radio mb-3">
                          <input name="user_type" class="custom-control-input" id="tenant-radio" type="radio" value="tenant">
                          <label class="custom-control-label" for="tenant-radio">Tenant</label>
                      </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Register</button>
                    </div>
                </form>


            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
             {{-- dont remove this div  --}}
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('login') }}" class="text-light"><small>Already have an account?</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('partials.brochure._footer')

	@include('partials.brochure._scripts')
</body>

</html>
