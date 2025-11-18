<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'email',
    ];
}
