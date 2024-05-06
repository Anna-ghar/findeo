<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'property_id',
    ];
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function images()
    {
        return $this->belongsTo(Image::class);
    }
}
