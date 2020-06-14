<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    //set default for a model attribute
    protected $attributes = [
        'is_active' => 1
    ];

    //scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('is_active', 0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getIsActiveAttribute($attribute)
    {
        return  [
            0 =>  'inactive',
            1 => 'active'
        ][$attribute];
    }
}
