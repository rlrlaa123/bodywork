<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $fillable = ['title', 'content', 'image'];
}
