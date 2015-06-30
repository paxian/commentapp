<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Comment extends Eloquent
{
    protected $fillable = array('author', 'text');
}
