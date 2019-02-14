<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresentationRating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','presentation_id','awesome','good','average','bad','horrible',
    ];
}


