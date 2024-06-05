<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory; 

    protected $fillable = [
        'description',
        'image',
        'mission_text',
        'mission_image',
        'vission_text',
        'vission_image',
        'values_text',
        'values_image',
        'company_name',
        'company_logo'
    ];
    
}
