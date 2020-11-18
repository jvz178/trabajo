<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ra extends Model
{
    protected $table = 'ras';

    protected $fillable = [
        'id', 'number','description','module_id','deleted',
    ];
}
