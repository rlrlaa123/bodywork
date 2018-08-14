<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $table = 'homeimages';

    protected $fillable = [
        'link1',
        'link2',
        'link3',
    ];
}
