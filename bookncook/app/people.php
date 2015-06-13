<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model {
    protected $table = 'reservations';

    protected $fillable=[

        'no_of_people',
        'date'



    ];

}
