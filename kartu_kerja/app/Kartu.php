<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kartu extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
