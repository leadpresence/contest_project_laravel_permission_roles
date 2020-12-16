@extends('layouts.main-admin')
@section('title', 'Apply to National Inventor s Challenge')
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <h2>NIC {{$contests->challenge_name}}</h2>

        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <ul class="breadcrumb">

                </ul>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <form method="POST" action="{{route('user.submit_application')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{method_field('PUT')}}

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                        <input name="contest_id" value="{{$contests->id }}" type="hidden">

                            <h2 class="card-inside-title">Candidate /Team Name and Url</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('team_name') is-invalid @enderror"
                                            name="team_name" placeholder="Full Name /Team name"
                                            value="{{ old('team_name') }}" required />

                                        @error('team_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('team_url') is-invalid @enderror"
                                            name="team_url" placeholder="web or linkedIn Url"
                                            value="{{ old('team_url') }}" required />

                                        @error('team_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">if you have a demo, whats the url? Demo can be anything
                                that shows us how you intend to create or have created, a presentation to show your
                                idea(s). You can add accessible drive urls if any.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('demo_url') is-invalid @enderror"
                                            placeholder="http://" name="demo_url" value="{{ old('demo_url') }}" required/>
                                    </div>
                                    @error('demo_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <h2 class="card-inside-title"> describe yourself or your team in 70 character or less.
                            </h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('team_description') is-invalid @enderror"
                                            placeholder="" name="team_description"
                                            value="{{old('team_description')}}" required/>
                                    </div>
                                    @error('team_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <h2 class="card-inside-title"> what will you do?</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4"
                                                class="form-control  @error('team_intention') is-invalid @enderror"
                                                name="team_intention" placeholder=""
                                                value="{{old('team_intention')}}" required></textarea>
                                        </div>
                                        @error('team_intention')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <h2 style="color: green;font-weight: 900;">Contact</h2>
                            <h2 class="card-inside-title"> where you do live now, and where will go back to after
                                NIC.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-map"></i></span>
                                            </div>
                                            <input type="text"
                                                class="form-control @error('team_city') is-invalid @enderror"
                                                placeholder="address" name="team_city" value="{{old('team_city')}}" required />
                                        </div>

                                        @error('team_city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <h2 class="card-inside-title"> Phone Number(s).</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="" value="{{old('phone')}}" name="phone" required/>
                                        </div>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <h2 class="card-inside-title"> Personal email address.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                                            </div>
                                            <input type="text" class="form-control email"
                                                placeholder="Ex: example@example.com" name="email"
                                                value="{{old('team_email')}}" required>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <h2 class="card-inside-title"> how many are you in your team?</h2>

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <select
                                        class="form-control show-tick ms select2 @error('team_size') is-invalid @enderror"
                                        name="team_size">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>

                                    </select>
                                </div>

                                @error('team_size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- choose challenge bactch -->
                            <!-- <h2 class="card-inside-title"> Contest</h2>
                            <div class="row clearfix">
                                <div class="col-sm-5">
                                    <div class="form-group @error('challenge_id') is-valid @enderror">


                                        <select name="challenge_id" class="form-control show-tick ms select2">
                                            <option value="">--Please Select--</option>
                                            <option value="1">Summer challenge 2021</option>
                                        </select>

                                    </div>

                                    @error('challenge_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div> -->
                            <h2 style="color: green;font-weight: 900;">Category</h2>
                            <h2 class="card-inside-title"> Which category best applies to your invention ?</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group @error('idea_category') is-invalid @enderror">

                                        <!-- <input type="text" class="form-control" placeholder="" /> -->

                                        <select name="idea_category" class="form-control show-tick ms select2">
                                            <option value="software development">software development</option>
                                            <option value="Robotics">Robotics</option>
                                            <option value="AI">AI</option>
                                            <option value="ML">ML</option>
                                            <option value="Mechanical engineering">Mechanical engineering</option>
                                            <option value="Electrical engineering<">Electrical engineering</option>
                                            <option value="BioMedical engineering">BioMedical engineering</option>
                                        </select>
                                    </div>
                                    @error('idea_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                            <h2 class="card-inside-title"> How long have you (or each of you) have been working on
                                this idea(s)? How much of that has been fulltime ? please explain</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4"
                                                class="form-control no-resize @error('experience') is-invalid @enderror"
                                                name="experience" placeholder=""
                                                value="{{old('experience')}}" required ></textarea>
                                        </div>

                                        @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <h2 style="color: green;font-weight: 900;">Idea</h2>
                            <h2 class="card-inside-title"> What are your motivations, and what do you intend to
                                create or do? please let us know.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4"
                                                class="form-control no-resize @error('idea_motivation') is-invalid @enderror"
                                                name="idea_motivation" placeholder=""
                                                value="{{old('experience')}}" required></textarea>
                                        </div>

                                        @error('idea_motivation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <h2 class="card-inside-title"> What do undersatnd about your invention that others
                                don't,what makes you idea unique?</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4"
                                                class="form-control no-resize @error('idea_comprehension') is-invalid @enderror"
                                                name="idea_comprehension" placeholder=""
                                                value="{{old('idea_comprehension')}}" required></textarea>
                                        </div>
                                        @error('idea_comprehension')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <h2 style="color: green;font-weight: 900;">Others</h2>
                            <h2 class="card-inside-title">Please provide any other relevant information about your
                                idea and its formation.</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4"
                                                class="form-control no-resize @error('miscellaneous_info') is-invalid @enderror"
                                                name="miscellaneous_info" placeholder="..."
                                                value="{{old('miscellaneous_info')}}"></textarea>
                                        </div>
                                        @error('miscellaneous_info')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>



                            <h2 class="card-inside-title"> How did you know about National Information Chalenge.
                            </h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"
                                                class="form-control @error('how_you_heard_about_us') is-invalid @enderror"
                                                placeholder="" name="how_you_heard_about_us" />
                                        </div>
                                        @error('how_you_heard_about_us')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="validate_info">
                                <label for="validate_info"><b style="color:red">*</b> Do you confirm all information
                                    provided are valid ?</label>

                                @error('validate_info')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- <a href="show"><button class="btn btn-dark btn-lg">Save for later</button></a> -->
                            <a href="profile"><button type="submit" class="btn btn-primary btn-lg">Submit
                                    Application</button></a>



                        </div> <!-- body -->
                    </div> <!-- Card -->

                </div>
        </div>
        </form>
    </div>
    <div>

    </div>
    @endsection
