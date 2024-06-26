<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Courses extends Authenticatable
{
    use HasFactory, Notifiable;

    public function student(){
        return $this->belongsToMany(Student::class);
    }

    public function TA(){
        return $this->belongsTo(TA::class);
    }

    public function supervisor(){
        return $this->belongsTo(Supervisor::class);
    }

    protected $fillable = ['Course name', 'id', 'Insturctors', 'Major', 'Credit hours'];


}
