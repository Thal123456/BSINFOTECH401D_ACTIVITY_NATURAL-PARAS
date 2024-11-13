<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students'; //students means yung table na need natin iaccess

    protected $fillable = [  // means kung ano yung mga data ba need fillupan
        'name',
        'email',
        'age',
        'address',
    ];

}
