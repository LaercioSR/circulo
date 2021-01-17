<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public function scopeFilterSchool($query) {
        $user = auth()->user();
        $query->join('school', 'school.id', '=', 'student.school_id')
            ->where('school.id', $user->school->id);
        return $query;
    }

    public function interest(){
        return $this->hasMany('App\Models\Interest');
    }

    public function grade(){
        return $this->hasMany('App\Models\Grade');
    }
}
