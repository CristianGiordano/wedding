<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $table = 'rsvp';

    protected $fillable = [
        'is_attending',
        'guests',
        'preference_arrival_drink',
        'preference_table_drink',
        'has_dietry_requirements',
        'dietry_requirements',
        'comments',
    ];

    protected $casts = [
        'is_attending'            => 'boolean',
        'guests'                  => 'json',
        'has_dietry_requirements' => 'boolean',
    ];
}
