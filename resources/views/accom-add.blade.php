@extends('layouts.mainlayout')

@section('content')
<section id="page-title">
    <div class="container clearfix">
      <h1>Add a listing</h1>
      <span>Help someone find a home!</span>
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

          <div class="col-md-6">
          <form style="max-width: 25rem;" action="{{ route('accommodation.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <label for="inputTitle">BASICS</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Title"><br>
              <small>Choose Type</small>
              <select class="form-control" name="type">
                <option>Apartment</option>
                <option>Condo</option>
                <option>House</option>
                <option>Others</option>
              </select>
              </div>
              
              <hr>

              <div class="form-group">
              <label for="inputFeatures">INFORMATION</label>
              <input type="number" class="form-control" name="rate" placeholder="Monthly Rent"><br>
              <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
              </div>

              <hr>

              <div class="form-group">
              <label for="inputFeatures">Features</label>
              <input type="number" class="form-control" name="bedrooms" placeholder="# of Bedrooms"><br>
              <input type="number" class="form-control" name="bathrooms" placeholder="# of Bathrooms">
              </div>
      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="furnished">
                    <label class="form-check-label" for="checkFurnished">Furnished</label>
                  </div>
                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="pets">
                    <label class="form-check-label" for="checkPets">Pets Allowed</label>
                  </div>
                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="smoking">
                    <label class="form-check-label" for="checkSmoke">Smoking Allowed</label>
                  </div>
                  
          <hr />
          
        


          <div class="col-md-6">
          <div class="form-group">
              <label for="inputAddress">ADDRESS</label>
              <input type="text" class="form-control" name="street_no" placeholder="Street #"><br>
              <input type="text" class="form-control" placeholder="Address Line 1" name="add_line1" required> <br>
              <input type="text" class="form-control" placeholder="Address Line 2" name="add_line2"> <br>
              <input type="text" class="form-control" placeholder="City" name="city" required> <br>
              <input type="text" class="form-control" placeholder="State/Province" name="province" required> <br>
              <input type="text" class="form-control" placeholder="Country" name="country" required> <br>
              <input type="text" class="form-control" placeholder="Postal Code" name="postal_code" required> <br>
              </div>

              <hr />

              <div class="form-group">
              <label for="inputFeatures">HOME IMAGES</label>
              <input type="file" class="form-control-file"  name="images[]" multiple ><br>
              <input type="text" class="form-control" name="others" placeholder="Others">
              </div>


              <hr />
          
          </div>


          <button type="submit" class="button button-border button-rounded button-fill fill-from-bottom button-black mt-5 btn-block"><span>Submit Post</span></button>
            </form>

          
            

            
          
          </div>

        </div>
        </div>
        </div>
      </section>
@endsection