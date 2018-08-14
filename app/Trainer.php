<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
