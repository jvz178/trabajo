<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assistance extends Model
{
    protected $table = 'assistances';

    protected $fillable = [
        'id', 'student_id','date','assistance','email', 'accepted','deleted',
    ];
}
