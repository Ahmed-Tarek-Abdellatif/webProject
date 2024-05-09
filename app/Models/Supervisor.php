<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasMany(Courses::class);
    }
    public function supervisor(){
        return $this->hasMany(Petition::class);
    }
}
