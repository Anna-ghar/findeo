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
    public function property_images()
    {
        return $this->hasMany(Property_Image::class);
    }
    public function users(){
        return $this->hasOne(User::class);
    }
}
