<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belong extends Model
{
    protected $table = 'belongs';

    protected $fillable = [
        'id', 'student_id','enterprise_id','deleted',
    ];
}
