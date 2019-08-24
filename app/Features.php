<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Features extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'accom_features';
    
    protected $fillable = [
        'bedrooms', 'bathrooms', 'furnished', 'pets', 'smoking'
    ];
}
?>