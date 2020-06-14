<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
