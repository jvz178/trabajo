<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ce extends Model
{
    protected $table = 'ces';

    protected $fillable = [
        'id', 'word','description','ra_id','task_id','mark','deleted'
    ];
}
