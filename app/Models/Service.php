<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'short_description',
        'description',
        'services_photo',
        'slug',
    ]; 

    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function category(){
        return $this->hasMany(ServiceCategory::class);
    }
}
