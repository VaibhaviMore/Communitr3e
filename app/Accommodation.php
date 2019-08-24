<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Accommodation extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'accomodations';
    
    protected $fillable = [
        'title', 'type', 'user_id', 'address_id', 'link', 'rate', 'features_id', 'description', 'images', 'others'
    ];
   
    public function address() {
        $addressId = $this->address_id;
        $address = Address::find($addressId);
        return $address;
    }
    
    public function user() {
        $userId = $this->user_id;
        $user = User::find($userId);
        $userDetails = array("name" => $user->first_name . " " . $user->last_name, "email" => $user->email, "contact" => $user->contact);
        return $userDetails;
    }
    
    public function features() {
        $featuresId = $this->features_id;
        $features = Features::find($featuresId);
        return $features;
    }
}

?>