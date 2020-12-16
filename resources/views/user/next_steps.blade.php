@extends('layouts.main-admin')

@section('title', 'Next Steps')
@section('content')
<div class="body_scroll">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Next steps</h2>

            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-sm-12">
                <ul class="cbp_tmtimeline">
                    <li>
                        <div class="cbp_tmicon"><i class="zmdi zmdi-check"></i></div>
                        <div class="cbp_tmlabel">
                        <blockquote>

                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Well done!</h4>
                                <p>we have recieved your application , now professionals that are relevant to your
                                    choosen category will review you application and
                                    we will send updates to you only if your application qalifies through the review
                                    stages. All the best.</p>
                                <hr>
                                <!-- <p class="mb-0">We will contact you once your application suceeds.</p> -->
                            </div>
                            </blockquote>

                            <!-- <a href="index.html" class="btn btn-primary waves-effect waves-light">SUBMIT</a> -->
                        </div>
                    </li>
                    <li>
                        <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-email"></i></div>
                        <div class="cbp_tmlabel">
                        <blockquote>
                                <div class="blockquote">
                                  Exactly 30 days from your day of application you will recieve and email ,if yor application qualifies.
                                    <br><br>
                                </div>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                        <div class="cbp_tmlabel">
                        <blockquote>
                                <div class="blockquote">
                                   Prepare your presentations and be ready to implement your idea,we take responsibility for the space you will need for this.
                                    <br><br>
                                </div>
                            </blockquote>
                        </div>
                    </li>
                 
                    
               
              
                </ul>
                <a href="{{route('user.profile')}}" class="btn btn-primary waves-effect waves-light">Home</a>

            </div>
        </div>
    </div>
</div>

@endsection
