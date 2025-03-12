<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Explicitly define the table name (not needed if it follows Laravel's convention)
    protected $table = 'students';

     // Specify which fields are mass assignable.These names should be same as column names of table
    protected $fillable = [
         'name', 'email', 'reg_no', 'mob_no', 'age', 'gender', 'hobby'
    ];
}
