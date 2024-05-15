<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
    ];
    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_images', 'img_id', 'property_id');
    }
    public function users(){
        return $this->hasOne(User::class);
    }
}
