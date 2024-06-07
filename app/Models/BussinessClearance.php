<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BussinessClearance extends Model
{
    use HasFactory;

    protected $fillable = [

        'businessName',
        'natureOfBusiness',
        'businessAddress',
        'ownerName',
        'ownerContact',
        'validID',
        'rtype'


    ];
}
