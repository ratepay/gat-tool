<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','title','date','description', 'speaker_id',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date'
    ];

    /**
     * Relation to its given feedback
     */
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    /**
     * Relation to its given rating
     */
    public function votes()
    {
        return $this->hasOne(PresentationRating::class);
    }

    /**
     * Relation to its speaker
     */
    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
