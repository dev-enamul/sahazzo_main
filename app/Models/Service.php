<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'services_photo',
        'slug',
    ]; 

    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
