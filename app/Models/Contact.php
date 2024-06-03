<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; 

    protected $fillable = [
        'description',
        'address',
        'phone_no',
        'phone_no_2',
        'email',
        'email2',
        'map',
        'twitter',
        'fb',
        'youtube',
        'linkedin',
        'instagram',
        'whatsapp',
        'snapchat',
        'pinterest',
    ];
}
