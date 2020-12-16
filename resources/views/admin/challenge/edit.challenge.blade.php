@extends('layouts.main-admin')
@section('title', 'Edit role')
@section('content')
<div class="row clearfix">
 
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="email_address_2">Update Role </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="role name">
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row clearfix">
                                   
                                    <div class="col-sm-8 offset-sm-2">
                                        <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>

      
    </div>
</div>



@endsection