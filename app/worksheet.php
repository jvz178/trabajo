<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worksheet extends Model
{
    protected $table = 'worksheets';

    protected $fillable = [
        'id', 'date','description','student_id','accepted','deleted',
    ];
}
