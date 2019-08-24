@extends('layouts.mainlayout')

@section('content')
<section id="page-title">
    <div class="container clearfix">
      <h1>Say Hello!</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </div>
  </section>

  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
		  
		  <div class="row">
          <div class="col-lg-3 col-md-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
              <div class="fbox-icon"> <a href="#"><i class="icon-map-marker2"></i></a> </div>
              <h3>Our Headquarters<span class="subtitle">Ontario, Canada</span></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
              <div class="fbox-icon"> <a href="#"><i class="icon-phone3"></i></a> </div>
              <h3>Speak to Us<span class="subtitle">(519) 577 0762</span></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
              <div class="fbox-icon"> <a href="#"><i class="icon-skype2"></i></a> </div>
              <h3>Make a Video Call<span class="subtitle">Communitr3e</span></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 bottommargin clearfix">
            <div class="feature-box fbox-center fbox-bg fbox-plain">
              <div class="fbox-icon"> <a href="#"><i class="icon-email2"></i></a> </div>
              <h3>Send an Email<span class="subtitle">communitr3e@gmail.com</span></h3>
            </div>
          </div>
        </div>
		  
		  <div class="clearfix"></div>
		  
		  
        <div class="col_half">
          <div class="fancy-title title-dotted-border">
            <h3>Send us an Email</h3>
          </div>
          <div>
            @if(Session::has('message'))
            <div class="style-msg successmsg">
              <div class="sb-msg"><i class="icon-thumbs-up"></i>{{ Session::get('message') }}</div>
            </div>
            @endif
             <form action="{{ url('/contact') }}" method="post">
            <!-- <form class="nobottommargin" id="template-contactform" name="template-contactform" action="{{ url('/contact') }}" method="post"> -->
              @csrf
              <div class="col_one_third">
                <label for="template-contactform-name">Name <big>*</big></label>
                <input type="text" id="template-contactform-name" name="contactform_name" value="" class="sm-form-control{{ $errors->has('contactform_name') ? ' is-invalid' : '' }}" autofocus/>
                @if($errors->has('contactform_name'))
                  {{ $errors->first('contactform_name') }}
                @endif
              </div>
              <div class="col_one_third">
                <label for="template-contactform-email">Email <big>*</big></label>
                <input type="email" id="template-contactform-email" name="contactform_email" value="" class="sm-form-control{{ $errors->has('contactform_email') ? ' is-invalid' : '' }}" />
                @if ($errors->has('contactform_email'))
                  <span role="alert">
                    <strong>{{ $errors->first('contactform_email') }}</strong>
                  </span>
                @endif
                
              <div class="col_one_third col_last">
                <label for="template-contactform-phone">Phone</label>
                <input type="text" id="template-contactform-phone" name="contactform-phone" value="" class="sm-form-control{{ $errors->has('contactform_phone') ? ' is-invalid' : '' }}" />
                @if ($errors->has('contactform_phone'))
                  <span role="alert">
                    <strong>{{ $errors->first('contactform_phone') }}</strong>
                  </span>
                @endif
              </div>
              <div class="clear"></div>
              <div class="col_two_third">
                <label for="template-contactform-subject">Subject<big>*</big></label>
                <input type="text" id="template-contactform-subject" name="subject" value="" class="sm-form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" />
                @if ($errors->has('subject'))
                  <span role="alert">
                    <strong>{{ $errors->first('subject') }}</strong>
                  </span>
                @endif
              </div>
              <div class="col_one_third col_last">
                <label for="template-contactform-service">Services</label>
                <select id="template-contactform-service" name="template_contactform_service" class="sm-form-control">
                  <option value="">-- Select One --</option>
                  <option value="Programs/Courses">Programs &amp; Courses</option>
                  <option value="Accomodations">Accomodations</option>
                  <option value="General">General</option>
                </select>
                @if ($errors->has('template_contactform_service'))
                  <span role="alert">
                    <strong>{{ $errors->first('template_contactform_service') }}</strong>
                  </span>
                @endif
              </div>
              <div class="clear"></div>
              <div class="col_full">
                <label for="template-contactform-message">Message <big>*</big></label>
                <textarea class="sm-form-control{{ $errors->has('contactform_message ') ? ' is-invalid' : '' }}" id="template-contactform-message" name="contactform_message" rows="6" cols="30"></textarea>
                @if ($errors->has('contactform_message'))
                  <span role="alert">
                    <strong>{{ $errors->first('contactform_message') }}</strong>
                  </span>
                @endif
              </div>
              <div class="col_full hidden">
                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
              </div>
              <div class="col_full">
                <input type="submit" id="submit-button" tabindex="5" value="Submit Comment" class="button button-3d nomargin">
              </div>
                 </div>
            </form>
          </div>
        </div>
        <div class="col_half col_last">
			<div class="fancy-title title-dotted-border">
            <h3>Find us on Map</h3>
          </div>
          <section id="google-map" class="gmap" style="height: 410px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92718.25267369814!2d-80.5463547105763!3d43.430412977625565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf48c03ee5105%3A0x9525f8e6df5f544b!2sKitchener%2C+ON!5e0!3m2!1sen!2sca!4v1554325818627!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			
			</section>
        </div>
        <div class="clear"></div>
        
      </div>
    </div>
  </section>
@endsection
