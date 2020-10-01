<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Location;

class Employee extends Model{
    protected $fillable = [
        'name',
        'lastname',
       
       'location_id'
    ];

    public function locations(){
        return $this -> BelongsTo(Location::class);
    }

    public function tasks(){
        return $this -> belongsToMany(task::class);
    }
}
