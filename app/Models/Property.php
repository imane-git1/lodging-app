<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;       


    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'city',
        'address',
        'bedrooms',
        'bathrooms',
        'features',
        'images',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
