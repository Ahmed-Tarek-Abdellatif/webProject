<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Student extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsToMany(Courses::class);
    }

    public function TA(){
        return $this->belongsTo(TA::class);
    }

    public function finance(){
        return $this->belongsTo(Finance::class);
    }

    public function petition(){
        return $this->belongsToMany(Petition::class);
    }

}
