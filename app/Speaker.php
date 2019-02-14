<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model

{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'name','first_name',

    ];

    /**
     * Relation to its presentations
     */
    public function presentation()
    {
        return $this->hasMany(Presentation::class);
    }

    /**
     * Generate the speakers full name
     *
     * @return String
     */
    public function fullName()
    {
        return $this->first_name . ' ' . $this->name;
    }
}

