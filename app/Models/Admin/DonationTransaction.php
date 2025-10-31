<?php

namespace App\Models\Admin;

use App\DonationTransactionStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationTransaction extends Model
{
    use SoftDeletes;

    const COUNT_CACHE_KEY = 'DONATION_TXN_ENTRIES_COUNT';

    use SoftDeletes;
    protected $fillable = [
        'donation_id',
        'amount',
        'transaction_reference',
        'transaction_status'
    ];

    protected $casts = [
        'transaction_status' => DonationTransactionStatus::class
    ];

    public function donation(): BelongsTo
    {
        return $this->belongsTo(Donation::class);
    }

    public function scopeSuccessful(Builder $query)
    {
        return $query->where('transaction_status', DonationTransactionStatus::SUCCESSFUL);
    }
}
