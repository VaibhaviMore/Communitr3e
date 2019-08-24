@extends('layouts.mainlayout')

@section('content')

<section id="page-title">
    <div class="container clearfix">
      <h1>Programs &amp; Courses</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Programs &amp; Courses</li>
      </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="postcontent nobottommargin col_last clearfix">
          <div class="heading-block fancy-title nobottomborder title-bottom-border t700 bounceInRight animated" data-animate="bounceInRight">
            <h3>PROGRAMS LIST FOR <span>INTERNATIONAL STUDENTS</span></h3>
          </div>
          <div class="col-md-12">
          @if(sizeof($programs) >= 1)
            @foreach($programs as $program)
            <div class="card t700 bounceInRight animated bottommargin-sm" data-animate="bounceInRight">
                <div class="card-header"><strong><a href="#">{{$program->prog_name}}</a></strong></div>
                <div class="card-body">
                  <div class="title-block">
                
                  <h4>CATEGORY <span>{{$program->prog_category}}</span></h4>
                  <h4>DURATION: <span style="color:black;">{{$program->prog_duration}}</span></h4>
                  </div>
                  {{str_limit($program->prog_desc, 300, '...')}}
                    <br>
                  <a href="{{route('programs.show', $program->id)}}" class="button button-rounded button-reveal button-small button-border tright fright">
                    <i class="icon-arrow-right1"></i><span>Details</span>
                  </a>
                </div>
            </div>
            
            @endforeach
            @else
              <h5>No programs found.</h5>
            @endif
          
            <div>
              {{$programs->appends($_GET)->links()}}
            </div>
          </div>
			  </div>
        <div class="sidebar nobottommargin clearfix t700 bounceInLeft animated" data-animate="bounceInLeft">
          <div class="sidebar-widgets-wrap">
        
			  <form action="{{route('programs.index')}}" method="get" enctype="multipart/form-data">
        {{ csrf_field() }}
			   <div class="heading-block fancy-title  title-bottom-border">
            <h3>FILTER <span>PROGRAMS</span></h3>
          	</div>
			  
            <div class="widget clearfix">
             	<h4>Search Programs</h4>
				
					<div class="form-row">
						<div class="form-group col-md-12">
							<input type="text" class="form-control" id="searchProgram" name="searchProgName" placeholder="Type program name here..">
						</div>
					</div>
				
            </div>
			  
            <div class="widget clearfix">
              <h4>Filter By Category</h4>
					<div class="form-row">
						<div class="form-group col-md-12">
							<select id="inputState" class="form-control" name="searchProgCat">
								<option value="">Select category</option>
								<?php
                  foreach($progCategories as $catArray) {
                    $category = (Array)$catArray;
                      echo "<option value=" . "'" . $category["\0*\0" . 'attributes'][0] . "'>" . $category["\0*\0" . 'attributes'][0] . "</option>";
                    }
                ?>
							</select>
						</div>
					</div>
				
            </div>

            <div class="widget clearfix">
              <h4>Filter By Duration</h4>
               
					<div class="form-row">
						<div class="form-group col-md-12">
							<select id="inputState" name="searchProgDur" class="form-control">
								<option value="">Select duration</option>
								<?php
                                    foreach($progDurations as $durArray) {
                                        $duration = (Array)$durArray;
                                        echo "<option value=" . "'" . $duration["\0*\0" . 'attributes'][0] . "'>" . $duration["\0*\0" . 'attributes'][0] . "</option>";
                                    }
                                ?>
							</select>
						</div>
					</div>
				
            </div>
			    


            <div class="widget clearfix">       
            <div class="fomr-row">
						<div class="form-group col-md-12">
            <button type="submit" class="button button-large button-circle button-border button-green btn-block"><i class="icon-search"></i> Search</button>
						</div>
					</div>
          </div>
			  
			 
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection