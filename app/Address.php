<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'address';
    
    protected $fillable = [
        'street_no', 'add_line1', 'add_line2', 'city', 'province', 'country', 'postal_code'
    ];
}

?>