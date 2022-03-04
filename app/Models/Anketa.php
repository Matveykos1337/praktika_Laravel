<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anketa extends Model
{
    public $table = "anketa";

    use HasFactory;

    protected $fillable = [
        'adress',
        'opisanie',
        'kategory',
        'maxcost',
        'img',
    ];

}
