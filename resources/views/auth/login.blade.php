@extends('layouts.auth')

@section('content')
<div class="col-lg-4 col-sm-12">
    <form class="card auth_form" method="POST" action="{{ route('login') }}">
        <div class="header">
            <img class="logo" src="{{asset('images/logo.png')}}" alt="">
            <h5>Log in</h5>
        </div>
        <div class="body">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    placeholder="Email" required autocomplete="email" autofocus>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="{{ route('password.request') }}" class="forgot"
                            title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="checkbox">
                <input id="remember_me" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label for="remember_me">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN IN</button>

            <a href="{{ route('register') }}" class="btn btn-secondary btn-block waves-effect waves-light">SIGN UP</a>
            <div class="signin_with mt-3">
                            @if (Route::has('password.request'))
                                    <a class="link"  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            
            </div>
        </div>

        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
    </form>
    <div class="copyright text-center">
        &copy;
        <script>
            document.write(new Date().getFullYear())

        </script>,
        <span>Designed by <a href="https://roboticscenterhq.com/" target="_blank">Robotics Center</a></span>
    </div>
</div>
<div class="col-lg-8 col-sm-12">
    <div class="card">
        <img src="https://image.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg"
            alt="Sign In" />
    </div>
</div>
@endsection
