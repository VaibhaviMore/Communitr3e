@extends('layouts.mainlayout')

@section('content')
<section id="page-title">
    <div class="container clearfix">
      <h1>Accomodations</h1>
      <span>Find your home away from your home!</span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Accomodations</li>
      </ol>
    </div>
</section>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        <li>{{ $errors->has('title') ? $errors->first('title') : 'No' }}</li>
    </ul>
</div>
@endif
<section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('accommodation.create') }}" class="fright button button-xlarge button-border fright button button-xlarge button-border button-green mb-5 button-rounded tright button-rounded tright">Post An Ad<i class="icon-home"></i></a>
            </div>
            <div class="col-md-12">
                <form action="{{route('accommodation.index')}}" method="get" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                        <div class="form-group col-md-2">
                          <label for="inputRange">Price Range</label>
                          <input type="number" class="form-control" name="searchMinRange" id="inputRange" placeholder="MIN">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputRange">Price Range</label>
                          <input type="number" class="form-control" name="searchMaxRange" id="inputRange" placeholder="MAX">
                          </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">CHOOSE TYPE</label>
                            <select id="inputState" class="form-control" name="searchType">
                            <option value="">Select type</option>
                            <?php
                              foreach($accomType as $typeArray) {
                                $type = (Array)$typeArray;
                                  echo "<option value=" . "'" . $type["\0*\0" . 'attributes'][0] . "'>" . $type["\0*\0" . 'attributes'][0] . "</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                          <button type="submit" class="button button-border button-rounded btn-block"><i class="icon-search"></i>SEARCH</button>
                        </div>
                  </div>
                       
            </form>
            </div>
            @if(sizeof($accommodations) >= 1)
            @foreach($accommodations as $acc)
            <div class="col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="images/accom/{{$acc->images[0]->image_path}}" data-holder-rendered="true">
                  <div class="card-body">
                    <div class="title-block">
                      <h3>{{$acc->title}}</h3>
                      <span>${{$acc->rate}} per month</span>
                  </div>
                    <button class="button button-3d" data-toggle="modal" data-target=".bs-example-modal-lg">View Details</button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-body">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel">{{$acc->title}}</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                  <div class="container">
                                    <div class="col_full portfolio-single-image">
                                        <div class="fslider" data-arrows="true" data-animation="slide">
                                      <div class="flexslider">
                                        <div class="slider-wrap">
                                            @if($acc->images != "Not available" and !empty($acc->images))
                                                @foreach($acc->images as $image)
                                                    <div class="slide"><a href="#"><img src="images/accom/{{$image->image_path}}" alt=""></a></div>
                                                @endforeach
                                            @else
                                                Not available
                                            @endif
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col_one_third portfolio-single-content nobottommargin">
                                        <div class="fancy-title title-dotted-border">
                                      <h2>User Info:</h2>
                                    </div>
                                        <div class="card events-meta">
                                      <div class="card-body">
                                        <ul class="portfolio-meta nobottommargin">
                                          <li><span><i class="icon-user"></i>Posted by:</span> {{ $acc->user()['name'] }}</li>
                                          <li><span><i class="icon-calendar3"></i>Date Posted:</span> {{$acc->created_at ? $acc->created_at : 'Not Available'}}</li>
                                          <li><span><i class="icon-email"></i><a href="#"> Email: {{$acc->user()['email']}}</a></span></li>
                                          <li><span><i class="icon-phone"></i>Phone:</span> <a href="#">{{$acc->user()['contact'] ? $acc->user()['contact'] : 'Not Available'}}</a></li>
                                        </ul>
                                      </div>
                                    </div>

                                  </div>
                                    <div class="col_two_third portfolio-single-content col_last nobottommargin">
                                    <div class="fancy-title title-dotted-border">
                                      <h2>Accomodation Info:</h2>
                                    </div>
                                    <table class="table table-striped table-bordered">
                                      <tbody>
                                        <tr>
                                          <td>Title</td>
                                          <td>{{$acc->title}}</td>
                                        </tr>
                                        <tr>
                                          <td>Type</td>
                                          <td>{{$acc->type}}</td>
                                        </tr>
                                        <tr>
                                          <td>Rent</td>
                                          <td>{{$acc->rate}} per month</td>
                                        </tr>
                                        <tr>
                                          <td>Address</td>
                                          <td>{{ $acc->address()->street_no ? $acc->address()->street_no . " " : '' }}{{ $acc->address()->add_line1 }}{{ $acc->address()->add_line2 ? ", " . $acc->address()->add_line2 : '' }}, {{ $acc->address()->city }} {{ $acc->address()->province }}, {{ $acc->address()->country }} {{ $acc->address()->postal_code }}</td>
                                        </tr>
                                        <tr>
                                          <td>Features</td>
                                          <td>
                                          <ul class="iconlist">
                                            <li>
                                              <i class="icon-caret-right"></i> Number of Bedrooms: {{ $acc->features()->bedrooms }} 
                                            </li>
                                            <li>
                                              <i class="icon-caret-right"></i> Number of Bathrooms: {{ $acc->features()->bathrooms }}
                                            </li>
                                            <li>
                                              <i class="icon-caret-right"></i> Furnished: {{ $acc->features()->furnished ? "Yes" : "No" }}
                                            </li>
                                            <li>
                                              <i class="icon-caret-right"></i> Pet Friendly: {{ $acc->features()->pets ? "Yes" : "No" }}
                                            </li>
                                            <li>
                                              <i class="icon-caret-right"></i> Smoke Friendly: {{ $acc->features()->smoking ? "Yes" : "No" }}
                                            </li>
                                          </ul>

                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Description</td>
                                          <td>{{$acc->description}}</td>
                                        </tr>
                                        <tr>
                                          <td>Others</td>
                                          <td>{{ $acc->others ? $acc->others : '' }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                    <div class="clear"></div>
                                    <div class="divider divider-center"><i class="icon-circle"></i></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
            @endif
          </div>
     </div>
    </div>
</section>
@endsection