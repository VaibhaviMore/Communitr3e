<?php

namespace App\Http\Controllers;

use App\Accommodation;
use App\Images;
use App\Address;
use App\Features;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }
    public function index() {
        //when all fields of accomodation field is in request(min,max,type)
        if(!empty(request()->get('searchMinRange')) and !empty(request()->get('searchMaxRange')) and !empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('type', request()->get('searchType'))->where('rate','>',request()->get('searchMinRange'))->where('rate','<',request()->get('searchMaxRange'));
        }
        //min and max price range
        else if(!empty(request()->get('searchMinRange')) and !empty(request()->get('searchMaxRange')) and empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('rate','>',request()->get('searchMinRange'))->where('rate','<',request()->get('searchMaxRange'));
            
        }
        //min price range and type
        else if(!empty(request()->get('searchMinRange')) and empty(request()->get('searchMaxRange')) and !empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('rate','>',request()->get('searchMinRange'))->where('type', request()->get('searchType'));
        }
        //max price range and type
        else if(empty(request()->get('searchMinRange')) and !empty(request()->get('searchMaxRange')) and !empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('rate','< ',request()->get('searchMaxRange'))->where('type', request()->get('searchType'));
        }
        
        //min price range
        else if(!empty(request()->get('searchMinRange')) and empty(request()->get('searchMaxRange')) and empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('rate','>',request()->get('searchMinRange'));
        }
        //max price range
        else if(empty(request()->get('searchMinRange')) and !empty(request()->get('searchMaxRange')) and empty(request()->get('searchType'))) {
            $accommodations = Accommodation::all()->where('rate','<',request()->get('searchMaxRange'));
        }
        //type field
        else if(empty(request()->get('searchMinRange')) and empty(request()->get('searchMaxRange')) and !empty(request()->get('searchType')) ) {
            $accommodations = Accommodation::all()->where('type', request()->get('searchType'));
        }
        else{
            $accommodations = Accommodation::all();
        }

        foreach($accommodations as $accom) {
            if(is_array($accom->images)) {
                $images = [];
                foreach($accom->images as $image) {
                   $images[] = Images::find($image);
                }
                $accom->images = $images;
            }  
        }
        $accomType = Accommodation::distinct('type')->get(['type']);
        return view('accom-list', compact('accommodations','accomType','bed_features','bath_features'));
    }
    
    public function create() {
        return view('accom-add');
    }
    
    public function store(Request $request) {
        request()->validate([
            'title' => 'required',
            'type' => 'required',
            'add_line1' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'rate' => 'required',
            'description' => 'required'
        ]);
        $address = Address::create([
            'street_no' => $request->street_no,
            'add_line1' => $request->add_line1,
            'add_line2' => $request->add_line2,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'postal_code' => $request->postal_code
        ]);
        $features = Features::create([
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'furnished' => $request->furnished ? true : false,
            'pets' => $request->pets ? true : false,
            'smoking' => $request->smoking ? true : false
        ]);
        if($images = $request->file('images')) {
            $image_ids = [];
            foreach($images as $image) {
                $image_title = $image->getClientOriginalName();
                $image->move(public_path().'/images/accom', $image_title);
                $image = Images::create([
                    'image_title' => $image_title,
                    'image_path' => $image_title,
                    'image_caption' => $image_title,
                ]);
                $image_ids[] = new \MongoDB\BSON\ObjectID($image->id);
            }
        }   
        Accommodation::create([
            'title' => $request->title,
            'type' => $request->type,
            'user_id' => new \MongoDB\BSON\ObjectId(\Auth::user()->_id), 
            'address_id' => new \MongoDB\BSON\ObjectID($address->id),
            'images' => $image_ids,
            'features_id' => new \MongoDB\BSON\ObjectID($features->id),
            'rate' => $request->rate,
            'description' => $request->description,
            'others' => $request->others
        ]);
        
        return redirect()->route('accommodation.index')->with('success', 'Listing created successfully.');   
    }
    
}