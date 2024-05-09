<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TA extends Model
{
    use HasFactory;

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function courses(){
        return $this->hasMany(Courses::class);
    }
}
