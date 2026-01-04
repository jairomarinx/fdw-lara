<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presale extends Model
{
    protected $table = "presales";
    protected $fillable = [
    'name',
    'email',
    'phone',
    'product',
    'product_name',
    'description',
    'amount',

    // Stripe
    'stripe_session_id',
    'stripe_payment_intent_id',
    'stripe_customer_id',
    'payment_status',
    'checkout_mode',
    'stripe_event_id',
    'paid_at',
];

}
