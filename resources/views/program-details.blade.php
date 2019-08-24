@extends('layouts.mainlayout')

@section('content')
<section id="page-title">
    <div class="container clearfix">
      <h1>{{$program->prog_name}}</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
		 <li class="breadcrumb-item"><a href="#">Programs List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Program Details</li>
      </ol>
    </div>
  </section>
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="col-md-12 nobottommargin col_last clearfix">
          
          <div class="title-block">
					<h4>CATEGORY <span>{{$program->prog_category}}</span></h4>
					<h4>DURATION: <span>{{$program->prog_duration}}</span></h4>
				</div>
			
			<div class="title-block"><h4>PROGRAM DETAILS: </h4></div>
			
            <p>{{$program->prog_desc}}<br>
			
			 <a href="{{$program->prog_link}}" target="_blank" class="button button-mini button-circle button-green"><i class="icon-info-circle"></i>View more details about this program in the official website of Conestoga</a>
			</p> 
			<div class="title-block">
                <h4>FEES: <span>
                    @if ($program->prog_fees !== 'unavailable')
                        CAD {{$program->prog_fees}} PER SEMESTER (APPROXIMATELY)
                    @else
                        Unavailable
                    @endif
                    </span>
                </h4>
            </div>
			<div class="title-block"><h4>PROGRAM REQUIREMENTS: </h4></div>

      <ul class="list-group">
      @foreach($requirements as $prog_req)
        <li class="list-group-item">{{$prog_req}}</li>
        @endforeach
      </ul>
      <br>
        
          <div>
            <a href="{{ URL::previous() }}" class="button button-large button-circle button-green"><i class="icon-repeat"></i>Go To Previous Page</a>
          </div>
	        </div>
        </div>
        
      </div>
   
  </section>
@endsection
