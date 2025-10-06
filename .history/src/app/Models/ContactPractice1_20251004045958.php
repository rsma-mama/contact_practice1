<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPractice1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'firsname',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'content',
    ];
}
