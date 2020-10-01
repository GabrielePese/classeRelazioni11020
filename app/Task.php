<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'date_start'
    ];

    public function employees() {
        return $this -> belongToMany(Employee::class);
    }

}
