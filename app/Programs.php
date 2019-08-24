<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Programs extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'programs';
	
	public function requirements() {
        $reqIdArray = $this->prog_requirements;
        $requirements = [];
        foreach($reqIdArray as $reqId) {
            $requirements[] = Requirements::find($reqId)->req_text;
        }
        return $requirements;
    }
}

?>