<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }

    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
