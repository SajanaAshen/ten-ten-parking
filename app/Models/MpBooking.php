<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpBooking extends Model
{
    use HasFactory;
    protected $table = 'mp_booking';
    protected $primaryKey = 'booking_id';
    protected $fillable = [
        'package_id',
        'customer_id',
        'card_id',
        'transId',
        'cost',
        'offer',
        'coupon',
        'coupon_code',
        'booking_fee',
        'net_total',
        'created_on',
        'created_by',
        'status'
    ];

    public $timestamps = false;
}
