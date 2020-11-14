<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillable = ['id', 'name', 'lastname', 'birthdate', 'personal_id', 'salary', 'created_at', 'updated_at'];
    public $timestamps = false;
    public $table = 'employees';
}
