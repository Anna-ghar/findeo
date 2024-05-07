<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'address',
        'price',
        'rooms',
    ];

    public function property_images()
    {
        return $this->hasMany(Property_Image::class, 'property_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function  features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function  types()
    {
        return $this->belongsTo(Type::class);
    }
}
