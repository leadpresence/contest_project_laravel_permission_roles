@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-8">
    <p>Thanks for your interest in</p>

        <p> <h4 style="color:#008000;"><strong>National Innovators' Contest</strong></h4> </p>
            <div class="card">
                <div class="card-header">{{ __('Please ,Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                            <p>{{__('Thanks for your interest in National Innovation Contest')}}</p>
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
