@extends('layouts.main-admin')
@section('title', 'Profile')
@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card mcard_3">
            <div class="body">
                <a href="profile.html">
                <img src="assets/images/profile_av.jpg" class="rounded-circle shadow"
                        alt="profile-image">
                        </a>
                <h4 class="m-t-10">username</h4>

            </div>
        </div>

    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <small class="text-muted">Email address: </small>
                <p>Chinedu.ogbuligbo@gmail.com</p>
                <hr>
                <small class="text-muted">Phone: </small>
                <p>+ 202-555-0191</p>
                <hr>
                <ul class="list-unstyled">
                    <li>
                        <div>Applications Submited</div>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                        </div>
                    </li>

                    <li>About</li>
                </ul>
                <span>Datascience is the underrated future</span>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-danger">Download Now</a> -->
            <a href="edit_profile"><button class="btn btn-primary">Edit profile</button></a>

        </div>
    </div>
</div>
@endsection