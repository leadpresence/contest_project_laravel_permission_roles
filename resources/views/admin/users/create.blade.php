@extends('layouts.main-admin')
@section('title', 'Create user')
@section('content')

<div class="row clearfix">

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Create </strong> user</h2>
            </div>
            <div class="body">
                <form class="form-horizontal"    method="POST" action="{{ route('admin.store') }}">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="name">Name </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group ">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Full Name">
                            </div>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email"
                                class="form-control @error('name') is-invalid @enderror" 
                                    value="{{ old('email') }}" required autocomplete="email"  
                                    placeholder="email@domain.com ">
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="Password">Password </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" 
                                    required  placeholder="Password">
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="password_confirmation">Confirm Password </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <input type="Password"
                                    name="password_confirmation"  class="form-control @error('password_confirmation') is-invalid @enderror"  required
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>



                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="email_address_2">Assign Role </label>
                        </div>
                    @foreach($roles as $role)

                        <div class="col-lg-2 col-md-2 col-sm-4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}">
                                <label class="form-check-label" for="defaultCheck1">
                                {{$role->name}}

                                </label>
                            </div>
                        </div>
                        @endforeach



                    <div class="row clearfix">

                        <div class="col-sm-8 offset-sm-6">
                            <button type="submit"
                                class="btn btn-raised btn-primary btn-round waves-effect">Creat User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
@endsection
