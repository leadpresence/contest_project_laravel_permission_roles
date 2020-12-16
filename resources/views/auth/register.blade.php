@extends('layouts.auth')

@section('content')
<div class="col-lg-4 col-sm-12">
    

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="header">
            <img class="logo" src="{{asset('images/logo.svg')}}" alt="">
            <h5> {{ __('Signup') }}</h5>
            <span>Register a new membership</span>
        </div>
        <div class="body">
            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>

                <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!-- </div> -->
            </div>

            <!-- <div class="form-group row"> -->
            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

            <div class="input-group mb-3">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
            
            
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
                    name="password" required autocomplete="new-password" placeholder="Password">

             <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
            </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
      

            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required
                    autocomplete="new-password">
                    <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-check"></i></span>
                </div>
                 @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
           </div>


        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Signup') }}
                </button>
            </div>
        </div> 
        
        
        <div class="signin_with mt-3">
                            <a class="link" href="{{route('login')}}">You already have a account?</a>
                        </div>
        </div>
    </form>

    <div class="copyright text-center">
        &copy;
        <script>
            document.write(new Date().getFullYear())

        </script>,
        <span>Designed by <a href="https://roboticscenterhq.com/" target="_blank">Robotics Center</a></span>
    </div>
</div>
<div class="col-lg-6 col-sm-12">
    <div>
        <h3 style="color: green;">National Inventor's Challenge</h3>
        <div>
            <p class="card-inside-title" style="text-align: justify;">
                Level up and take challenges, invent for the future ,leave a mark and earn
                have insightful discussions with our dedicated team of welcoming mentors.
                NIC is 100% free forever. </p>
        </div>
    </div>
    <div class="card">
        <img src="https://image.freepik.com/free-vector/business-team-work-building-puzzle_159757-22.jpg"
            alt="Sign Up" />
    </div>
</div> 
@endsection
