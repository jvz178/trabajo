<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $table = 'studys';

    protected $fillable = [
        'id', 'student_id','cycle_id','deleted',    
    ];
}
