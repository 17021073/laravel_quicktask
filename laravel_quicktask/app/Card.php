<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'description', 
        'image', 
        'user_id',
    ];

    /**
     * Return user who has this card
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
