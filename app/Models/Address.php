<?php

namespace App\Models;

// use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    // use Searchable, SoftDeletes;
    use SoftDeletes;
}