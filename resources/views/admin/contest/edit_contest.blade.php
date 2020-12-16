@extends('layouts.main-admin')
@section('title', 'Edit Contest')
@section('content')

<div class="row clearfix">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Edit </strong> Contest</h2>
            </div>
            <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-danger">Download Now</a> -->
            <a href="{{route('admin.contests')}}"><button class="btn btn-primary"><i class="zmdi zmdi-arrow-left "></i>  Cancel</button></a>

        </div>
            <div class="body">
                <form class="form-horizontal" method="POST" action="{{route('admin.update_contest',$contest->id)}}">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                            <label for="challenge_name">Name </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group ">
                                <input type="text" class="form-control @error('challenge_name') is-invalid @enderror"
                                    name="challenge_name" value="{{ $contest->challenge_name}}" required
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
                                    name="description" required autocomplete="description"
                                    rows="3">{{ $contest->description }}</textarea>
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
                                    <option value="Batch A">{{ $contest->batch_name }}</option>
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
                            <label for="email">Year</label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">

                                <select class="form-control show-tick ms select2 @error('year') is-invalid @enderror"
                                    name="year">
                                    <option value="year">{{ $contest-> year}}</option>

                                    @for ($year = 2020; $year<2030; $year++) <option value="year"> {{$year}}</option>
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
                            <label for="start_date">Start Date </label>
                        </div>
                        <div class="col-sm-4 col-sm-4 col-sm-6">
                            <div class="form-group">
                            <div><spaan>  <p> <code>formerly :{{\Carbon\Carbon::parse(strtotime($contest->start_date))->format('Y/m/d')}}</code></p></span></div>

                                <div class="input-group masked-input">
                                    
                                    <input type="date"  min="1000-01-01" max="3000-12-31" class="form-control"
                                    value="{{$contest->start_date}}" name="start_date" required>
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
                            <div><spaan>  <p> <code>formerly :{{\Carbon\Carbon::parse(strtotime($contest->end_date))->format('Y/m/d')}}</code></p></span></div>

                                <div class="input-group masked-input">
                                    <input type="date"  min="1000-01-01" max="3000-12-31" class="form-control"
                                    name="end_date" value="{{\Carbon\Carbon::parse(strtotime($contest->end_date))->format('Y/m/d')}}" required>
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
                            <label for="                                <input class=" form-check-input" type="radio"
                                name="status" value="1">
                                Status</label>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Open

                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="2" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Closed

                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">

                        <div class="col-sm-8 offset-sm-5">
                            <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Update
                                Contest</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</div>

@endsection
