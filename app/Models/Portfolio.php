<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory; 

    protected $fillable = [
        'service_id',
        'slug',
        'title',
        'short_description',
        'description',
        'portfolio_photo',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
