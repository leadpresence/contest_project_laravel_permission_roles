@extends('layouts.main-admin')
@section('title', 'Profile')
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="{{route('user.profile')}}">
                @auth
                <img src="{{asset('/storage/images/'.Auth::user()->image)}}" class="rounded-circle shadow"
                        alt="{{auth()->user()->name}}">
                        @endauth
                        </a>
             @auth
                <h4 class="m-t-10">{{auth()->user()->name}}</h4>
                @endauth
            </div>
        </div>

    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
               @auth

                <small class="text-muted"> Email</small>
                <p>{{auth()->user()->email}}</p>
                @endauth
             

                <hr>
                @auth
                <small class="text-muted">Phone: </small>
                <p>{{auth()->user()->phone}}</p>
                @endauth
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <div>Applications Submited</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                aria-valuemax="100" style="width: 9%"> <span class="sr-only">0</span> </div>
                        </div>
                    </li>

                    <li>About</li>
                </ul>
                <span>{{auth()->user()->bio}}</span>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-danger">Download Now</a> -->
            <a href="{{route('user.edit_profile',auth()->user()->id)}}">

            <button class="btn btn-primary"><i class="zmdi zmdi-edit"></i> Edit profile</button></a>
        </div>
    </div>
</div>
@endsection