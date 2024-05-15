<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'address',
        'price',
        'rooms',
        'status',
        'type_id',
        'area',
        'city',
        'state',
        'zip-code',
        'bathrooms',
        'building_age',
        'bedrooms',

    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'property_images', 'property_id', 'img_id');
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
