@extends('layouts.main-admin')

@section('title', 'Edit Profile')
@section('content')

<div class="row clearfix">
    <form method="POST" action="{{route('user.update_profile',$user->id)}}" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Profile </strong> image</h2>
                </div>
                <div class="body">


                    <div class="row">
                        <div class="col-sm-4 col-sm-4">

                            <div class="body">
                                <input type="file" class="dropify" name="image">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Account</strong> Settings</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">


                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                @auth
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{auth()->user()->name}}">
                                @endauth
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Bio" name="bio" value="{{auth()->user()->bio}}"">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" value="{{auth()->user()->city}}"">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <select class="form-control show-tick ms select2" data-placeholder="gender"
                                    name="gender">
                                    <option value=1>Male</option>
                                    <option value=2>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                @auth
                                <input type="text" class="form-control" placeholder="E-mail"
                                    value="{{auth()->user()->email}}" name="email" disabled>
                                @endauth
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="phone number" name="phone" value="{{auth()->user()->phone}}"">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Country" name="country" value="{{auth()->user()->country}}"">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="address" rows="1" class="form-control no-resize"
                                    placeholder="Address Line ">{{auth()->user()->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <input id="procheck1" type="checkbox" checked name="profile_visibility" checked>
                                <label for="procheck1">Profile Visibility For Everyone</label>
                            </div>
                            <!-- <div class="checkbox">
                                <input id="procheck2" type="checkbox">
                                <label for="procheck2">New task notifications</label>
                            </div> -->
                            <!-- <div class="checkbox">
                                <input id="procheck3" type="checkbox">
                                <label for="procheck3">New challenge updates </label>
                            </div> -->
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
