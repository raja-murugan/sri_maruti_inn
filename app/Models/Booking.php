<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone_number',
        'whats_app_number',
        'email_id',
        'address',
        'proof_type',
        'proof_image',
        'customer_photo',
        'branch_id',
        'adult_count',
        'child_count',
        'booking_date',
        'chick_in_date',
        'chick_in_time',
        'chick_out_date',
        'chick_out_time',
        'days',
        'total',
        'gst_per',
        'gst_amount',
        'disc_per',
        'disc_amount',
        'add_amount',
        'grand_total',
        'payment_method',
        'status',
        'soft_delete'
    ];


    public function branch()
    {
        return $this->hasMany(Branch::class, 'branch_id');
    }
}
