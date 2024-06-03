<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'slug',
        'short_description',
        'description',
        'blog_photo',
        'status',
    ];
 
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
