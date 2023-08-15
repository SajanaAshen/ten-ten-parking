<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpBookingDetail extends Model
{
    use HasFactory;
    protected $table = 'mp_booking-detail';
    protected $primaryKey = 'booking_id';
    protected $fillable = [
        'booking_id',
        'terminal_in',
        'arr_flight_no',
        'terminal_out',
        'meeting_date',
        'coming_back',
        'meeting_h',
        'meeting_m',
        'coming_h',
        'coming_m',
        'reg_no',
        'model',
        'colour',
    ];

    public $timestamps = false;
}
