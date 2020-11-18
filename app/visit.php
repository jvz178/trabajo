<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'id', 'tracing_id','enterprise_id','date','kms','accepted','deleted'
    ];
}
