<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname','phone','email_verified_at','email', 'password','type','enterprise_id','cycle_id',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeId($query, $id){
        if($id)
            return $query->where('id',$id);
    }

    public function scopeStudentId($query, $Studentid){
        if($Studentid)
            return $query->where('student_id',$Studentid);
    }

    public function scopeDate($query, $date){
        if($date)
            return $query->where('date',$date);
    }
}
