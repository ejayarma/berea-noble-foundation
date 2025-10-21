<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationTransaction extends Model
{
    use SoftDeletes;

    const COUNT_CACHE_KEY = 'DONATION_TXN_ENTRIES_COUNT';

    public function scopeSuccessful(Builder $query)
    {
        // TODO: Change this to use Enum
        return $query->where('transaction_status', 'SUCCESS');
    }
}
