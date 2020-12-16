@extends('layouts.main'-admin)
@section('title', 'Edit Profile')
@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Security</strong> Settings</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-info">Save Changes</button>
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
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input id="procheck1" type="checkbox" checked>
                            <label for="procheck1">Profile Visibility For Everyone</label>
                        </div>
                        <div class="checkbox">
                            <input id="procheck2" type="checkbox">
                            <label for="procheck2">New task notifications</label>
                        </div>
                        <div class="checkbox">
                            <input id="procheck3" type="checkbox">
                            <label for="procheck3">New challenge updates </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection