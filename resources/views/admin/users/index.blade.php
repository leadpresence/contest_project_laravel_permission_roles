@extends('layouts.main-admin')
@section('title', 'users')
@section('content')

<div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Users </h2>
                
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
              
            </div>
        </div>
        <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-danger">Download Now</a> -->
            <a href="create"><button class="btn btn-primary">Add user</button></a>

        </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                       
                                        <th data-breakpoints="sm xs">ID</th>
                                        <th data-breakpoints="xs">Name</th>
                                        <th data-breakpoints="xs">Role</th>
                                        <th data-breakpoints="xs md">Email</th>
                                        <th data-breakpoints="sm xs md">Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                      <tr>
                                    
                                        <td><h5>{{ $user->id }}</h5></td>
                                        <td><span class="text-muted">{{ $user-> name}}</span></td>
                                        <td><span class="text-muted">{{implode(',' ,$user-> roles()->get()->pluck('name')->toArray())}}</span></td>
                                        <td>{{ $user-> email}}</td>
                                        <td>
                                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-default waves-effect waves-float btn-sm waves-green float-left"><i class="zmdi zmdi-edit"></i></a>

                                            <form action="{{route('admin.users.destroy',$user->id)}}" class="float-left" method="POST" >
                                            @csrf
                                            {{method_field('DELETE')}}

                                            <button type="submit" class="btn btn-danger waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>

                                            </form>
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
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


@endsection