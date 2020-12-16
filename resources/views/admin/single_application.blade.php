@extends('layouts.main-admin')
@section('title', 'Challenge Applications')

@section('content')

<div class="body_scroll">

    <div class="block-header" >
    <div class="row">
    <div class="col-lg-7 col-md-6 col-sm-12">
           <a href="{{route('admin.applications')}}"> <button class="btn btn-dark btn-icon float-left left_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-left"></i></button>  </a>
</div>
</div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>{{$application->team_name}} Application Detail</h2>
                
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-12">
                                <div class="preview preview-pic tab-content">
                                    <div class="tab-pane active" id="product_1"><img
                                            src="{{ asset('/') }}assets/images/logo.png" class="img-fluid"
                                            alt="" /></div>
                                </div>

                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-12">
                                <div class="product details">
                                    <h3 class="product-title mb-0">{{ $application->team_name  }}</h3>

                                    <div class="rating">

                                        <p>{{  $application->team_description  }}</p>
                                    </div>
                                    <hr>
                                    <p class="vote">{{  $application->team_description  }} </p>

                                    <p class="product-description"><i class="zmdi zmdi-accounts-alt"></i> {{  $application->team_size  }} man {{  $application->idea_category  }} team.</p>
                                    <p class="vote"><i class="zmdi zmdi-pin"></i> Presently Located at: {{  $application->team_city  }} </p>
                                    <p class="vote"><i class="zmdi zmdi-email"></i> {{  $application->email  }}  <i class="zmdi zmdi-dialpad"></i>  {{  $application->phone  }}</p>
                                    <p class="vote"> </p>



                                        

            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                    href="#intention"> Idea Intentions</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#motivation">Idea Motivation</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#comprehension">Idea Comprehension</a></li>
                       
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#misc">Other Info</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#files">Files & Links</a></li>
                       
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="tab-content">


                            <div class="tab-pane active" id="intention">
                                
                                {{$application->team_intention}}
                            </div>

                            <div class="tab-pane" id="motivation">
                            {{$application->idea_motivation}}
                            </div>

                            <div class="tab-pane" id="comprehension">
                            {{$application->idea_comprehension}}
                            </div>


                            <div class="tab-pane" id="misc">
                            {{$application->miscellaneous_info }}
                            </div>

                            <div class="tab-pane" id="misc">
                            {{$application->demo_url }}
                            </div>



                            <div class="tab-pane" id="files">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <div class="card">
                                            <div class="file">
                                                <a href="javascript:void(0);">
                                                   
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-collection-pdf"></i>
                                                    </div>
                                                    <div class="file-name">
                                                        <a href="{{$application->demo_url}}"></a>
                                                        <small>Submitted on <span class="date text-muted">{{$application->created_at}}</span></small>
                                                    </div>

                                                </a>

                                                <a href="{{$application->demo_url}}">Demo Url</a>

                                            </div>
                                        </div>
                                    </div>
                                    

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="action">
            <a href="{{route('admin.accept',$application->id)}}"><button class="btn btn-primary waves-effect" data-type="success" type="button">Approve</button></a>
            <a href="{{route('admin.decline',$application->id)}}"> <button class="btn btn-danger waves-effect" type="button">Decline</button></a>

                                    
        </div>    
        <!-- <div class="action">
            <button class="btn btn-danger waves-effect" type="button">Decline</button>

        </div> -->
    </div>
</div>

@endsection
