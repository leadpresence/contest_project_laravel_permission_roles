@extends('layouts.main-admin')
@section('title', 'Create contest')
@section('content')

<div class="row clearfix">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Create </strong> Contest</h2>
            </div>
            <div class="body">
                <form class="form-horizontal" method="POST" action="{{route('admin.store_contest')}}">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="challenge_name">Name </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group ">
                                <input type="text" class="form-control @error('challenge_name') is-invalid @enderror"
                                    name="challenge_name" value="{{ old('challenge_name') }}" required
                                    autocomplete="challenge_name" autofocus placeholder="enter contest name">
                            </div>
                        </div>
                        @error('nachallenge_nameme')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="description">Description </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group ">
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                    name="description" value="{{ old('description') }}" required autocomplete="name"
                                    autofocus placeholder="A short descriiption of this contest" rows="3"></textarea>
                            </div>
                        </div>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="email">Batch</label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <select
                                    class="form-control show-tick ms select2 @error('batch_name') is-invalid @enderror"
                                    name="batch_name">
                                    <option value="Batch A">Batch A</option>
                                    <option value="Batch B">Batch B</option>
                                </select>
                            </div>
                        </div>



                        @error('batch_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="year">Year</label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">

                                <select class="form-control show-tick ms select2 @error('year') is-invalid @enderror"
                                    name="year">
                                    <option value="2020">2020</option>

                                    @for ($year = 2021; $year< 2026 ; $year++) <option value={{$year}}> {{$year}}
                                        </option>
                                        @endfor
                                </select>
                            </div>
                        </div>

                        @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="Password">Start Date </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">

                                <div class="input-group masked-input">
                                   
                                    <input type="date"  min="1000-01-01" max="3000-12-31" class="form-control"

                                        name="start_date">
                                </div>
                            </div>

                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="Password">End Date </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <div class="input-group masked-input">
                                    
                                    <input type="date"  min="1000-01-01" max="3000-12-31" class="form-control"
                                        name="end_date">
                                </div>
                            </div>
                            @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="email_address_2">Status</label>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1">
                                <label class="form-check-label" for="defaultCheck1">
                                   Published/ Open

                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="2">
                                <label class="form-check-label" for="defaultCheck1">
                                    Draft/Closed

                                </label>
                            </div>
                        </div>
                    </div>


                    <!-- 
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="password_confirmation">Confirm Password </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                                <input type="Password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" required
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> -->

                 





                    <div class="row clearfix">

                        <div class="col-sm-8 offset-sm-5">
                            <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Create
                                Contest</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</div>

@endsection
