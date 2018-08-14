<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'number',
        'description',
        'time1',
        'time2',
        'time3',
        'note',
        'location',
    ];

    public function trainers()
    {
        return $this->hasMany(Trainer::class);
    }
}
