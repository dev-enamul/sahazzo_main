<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Gallery extends Model
{
    use HasFactory; 
    protected $fillable = [
        'project_id',
        'title',
        'gallery_photo',
    ];

    public function project()
    {
        return $this->belongsTo(Portfolio::class,'project_id');
    }
}
