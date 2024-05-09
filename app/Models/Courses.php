<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsToMany(Student::class);
    }

    public function TA(){
        return $this->belongsTo(TA::class);
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }
}
