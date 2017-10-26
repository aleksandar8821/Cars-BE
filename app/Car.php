<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    const VALIDATION = [
    		'mark' => 'required | min: 2',
        'model' => 'required | min: 2',
        'year' => 'required',
        'max_speed' => 'integer | between: 20, 300',
        'is_automatic' => 'required',
        'engine' => 'required',
        'number_of_doors' => 'required | integer | between: 2, 5'
    ];
}
