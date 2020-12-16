@extends('layouts.main-admin')
@section('title', 'Profile')
@section('content')
<div class="body_scroll">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h4>NIC created a new model for funding bright innovators & thinKers in Nigeria.</h4>
            @forelse($contests as $contest)
            <h5 style="color:green"><strong>{{$contest->challenge_name}}</strong></h5>
            <p>{{$contest->description}}.</p>
            <p>Application starts on {{\Carbon\Carbon::parse(strtotime($contest->start_date))->format('Y-m-d')}} and closes on
            {{\Carbon\Carbon::parse(strtotime($contest->end_date))->format('Y-m-d')}}</p>
<br>
            <a href="{{route('user.apply',$contest->id)}}"><button type="submit" class="btn btn-success btn-lg">
            Apply to {{$contest->challenge_name}} </button></a>
            @empty
            <h5 style="color:green"><strong>No ongoing contest</strong></h5>


            @endforelse

            <div class="card">
                <div class="header">
                    <h2><strong>Before You begin..</strong></h2>

                </div>
                <div class="body">
                    <ul class="list-unstyled activity">
                        <li class="a_birthday">
                            <h4>Prepare Urls</h4>
                            <p> <code>Ensure you have urls set that describes you or your team e.g linkedIn </code></p>
                            <p> <code>If you have any demo ensure you have url we won't accept files upload </code></p>

                        </li>
                        <li class="a_code">
                            <h4>Contact Information</h4>
                            <p> <code>make available the media to reach you email,phone etc. </code></p>
                        <li class="a_contact">
                            <h4>Motivations</h4>
                            <p> <code>prepare a your motivational statment about your idea,to the question "WHAT ARE
                                    YOUR MOTIVATIONS?" </code></p>

                        </li>
                        <li class="a_email">
                            <h4>INTENTIONS</h4>
                            <p> <code>prepare a your idea comprehension and intensions response, to the question "WHAT
                                    ARE YOUR INTENTIONS?" </code></p>

                        </li>
                        <!-- <li class="a_contact">
                                    <h4>Add New Contact</h4>
                                    <code>maryamamiri@gmail.com</code>
                                    <small>1 months ago.</small>
                                </li> -->
                    </ul>
                </div>
            </div>



        </div>


        <div class="col-lg-6 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                            src="https://cdn.pixabay.com/photo/2020/01/26/20/14/computer-4795762_960_720.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://cdn.pixabay.com/photo/2017/05/10/19/29/robot-2301646_960_720.jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                            src="https://cdn.pixabay.com/photo/2013/12/22/15/30/motherboard-232515_960_720.jpg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>
        </div>
    </div>


    <div class="row clearfix">


    </div>
  
    
</div>
@endsection
