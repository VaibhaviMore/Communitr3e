<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Images extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'images';
    
    protected $fillable = [
        'image_title', 'image_path', 'image_caption'
    ];
}

?>