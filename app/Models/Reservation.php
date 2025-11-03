<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Reservation extends Model
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;       

    protected $fillable = [
        'user_id',
        'property_id',
        'start_date',
        'end_date',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
