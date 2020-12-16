@extends('layouts.main-admin')
@section('title', 'Roles')
@section('content')

<div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Contests</h2>
                
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
              
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                <div class="d-flex justify-content-between">
            <a href="{{route('admin.create_contest')}}"><button class="btn btn-primary">Add Contest</button></a>

        </div>
                    <div class="card">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>


                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Bactch</th>
                                    <th>Year</th>

                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($contests as $contest)

                                <tr>
                                    <td>{{$contest->id}}</td>
                                    <td>{{$contest->challenge_name}}</td>
                                    <td>{{$contest->description}}</td>
                                   
                                    <td>{{$contest->batch_name}}</td>
                                    <td>{{$contest->year}}</td>
                                    <td>
                                            <a href="{{route('admin.edit_contest',$contest->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green float-left"><i class="zmdi zmdi-edit"></i></a>

                                            <form action="{{route('admin.delete_contest',['id'=>$contest->id])}}" method="POST"  class="float-left" >
                                            @csrf
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-primary     waves-effect waves-float btn-sm waves-blue "><i class="zmdi zmdi-delete"></i></a>

                                            </form>


                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
      
    </div>


@endsection