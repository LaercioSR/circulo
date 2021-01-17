<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function job(){
        return $this->hasMany('App\Models\Job');
    }
}
