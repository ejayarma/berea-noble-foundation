<?php

namespace App\Models\Admin;

use App\DonationSubscriptionStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationSubscription extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'donation_id',
        'subscription_status',
        'subscription_details'
    ];

    protected $casts = [
        'subscription_status' => DonationSubscriptionStatus::class,
        'subscription_details' => 'array'
    ];

    public function donation() : BelongsTo {
        return $this->belongsTo(Donation::class);
    }
}
