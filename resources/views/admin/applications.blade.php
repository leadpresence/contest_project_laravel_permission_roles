@extends('layouts.main-admin')
@section('title', 'Challenge Applications')
@section('content')

<div class="body_scroll">
     <div class="block-header">
    <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Accepted Applications </h2>

                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                        class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>

        </div>
        <div class="row">
            <div class="card">
                <div class="body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link " href="{{route('admin.all_applications')}}"> All
                                Applications</a></li>
                        <li class="nav-item"><a class="nav-link active"  href="{{route('admin.applications')}}"> Accepted
                                Applications</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('admin.declined')}}"> Declined
                                Applications</a></li>

                    </ul>
                </div>
            </div>
        </div>
       
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">


                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>


                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($applications as $application)

                                <tr>
                                    <td>{{$application->id}}</td>
                                    <td>{{$application->email}}</td>
                                    <td>{{$application->idea_category}}</td>
                                    <td>{{$application->created_at}}</td>
                                    <td>
                                        <a href="{{ route('admin.view',$application->id ) }}"
                                            class="btn btn-default waves-effect waves-float btn-sm waves-red"><i
                                                class="zmdi zmdi-eye"></i>View</a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                        class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i
                                        class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
