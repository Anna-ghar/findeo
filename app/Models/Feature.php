<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'feature_name',
        'quantity',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
