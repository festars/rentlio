<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    protected $guarded = [];

    
    public function landlord() 
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('available', 1);
    }
}
