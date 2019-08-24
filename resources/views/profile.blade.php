@extends('layouts.mainlayout')

@section('content')
    @if (Route::has('login'))
        <section id="page-title">
            <div class="container clearfix">
            <h1>Your Profile Bio</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item">Profile</li>
            </ol>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third portfolio-single-image nobottommargin">
                        <a href="#"><img src="images/icons/avatar.jpg" style="max-width: 284px;" alt=""></a>
                    </div>

                    <div class="col_two_third portfolio-single-content col_last nobottommargin">
                        <div class="fancy-title title-bottom-border">
                        <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
                    </div>
                    
                    <ul class="portfolio-meta bottommargin">
                        <li><span><i class="icon-user"></i>First Name:</span> {{ $user->first_name }}</li>
                        <li><span><i class="icon-user"></i>Last Name:</span> {{ $user->last_name }}</li>
                        <li><span><i class="icon-email3"></i>Email Address:</span> {{ $user->email }}</li>
                        <li><span><i class="icon-phone"></i>Phone Number:</span>{{ $user->contact}}</li>
                    </ul>
                    <a class="button button-border button-rounded button-blue" data-toggle="modal" data-target="#myModal"><i class="icon-edit"></i>Edit</a>
                    <!-- <img src="/uploads/profile_pic/{{$user -> profile_image}}"> -->
                </div>
                    
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-body">
                            <div class="modal-content">
                            <div class="modal-header noborder">
                                <!-- <h4 class="modal-title" id="myModalLabel">Edit your details</h4> -->
                                <h4 class="modal-title " id="myModalLabel">Edit your details</h4>
                            </div>
                            <form enctype="multipart/form-data" name="quick-contact-form" class="form-widget" action="{{ url('/profile') }}" method="post">
                                @csrf
                                <div class="form-result"></div>
                                <div class="modal-body">
                                            <input id="first_name" data-toggle="tooltip" title="" data-original-title="Enter your First Name"  value="{{ old('username', $user->first_name) }}" type="text" class="required sm-form-control input-block-level" name="first_name" required="required">
                                            <br/>
                                            <input id="last_name" data-toggle="tooltip" title="" data-original-title="Enter your Last Name"  value="{{ old('username', $user->last_name) }}" type="text" class="required sm-form-control input-block-level" name="last_name" required="required">
                                            <br/>
                                            <input id="email" data-toggle="tooltip" title="" data-original-title="Enter your email address"  type="email" value="{{ old('username', $user->email) }}" class="required sm-form-control email input-block-level" name="email" required="required">
                                            <br/>
                                            <input id="phone" data-toggle="tooltip" title="" data-original-title="Enter your phone number" value="{{ old('username', $user->contact) }}" type="text" class="sm-form-control input-block-level" name="contact">
                                        </div>
                                        <div class="modal-footer noborder">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="button button-small button-3d nomargin" id="quick-contact-form-submit" name="quick-contact-form-submit" type="submit">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    @else
    @endif
@endsection
