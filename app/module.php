<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table = 'modules';

    protected $fillable = [
        'id', 'name','cycle_id','deleted',
    ];
}
