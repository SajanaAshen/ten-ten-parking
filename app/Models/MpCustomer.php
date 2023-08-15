<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpCustomer extends Model
{
    use HasFactory;
    protected $table = 'mp_customer';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'customer_email',
        'phone',
        'customer_password',
        'tocken',
        'dob',
        'member_since',
        'complained'
    ];

    public $timestamps = false;
}
