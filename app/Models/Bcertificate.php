<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcertificate extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'birthDate',
        'contactNumber',
        'age',
        'sex',
        'civilStatus',
        'occupation',
        'purpose',
        'rtype',
        'status'


        

    ];

}
