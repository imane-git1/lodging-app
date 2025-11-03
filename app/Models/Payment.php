<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'reservation_id',
        'amount',
        'payment_method',
        'status',
        'transaction_id',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }


}
