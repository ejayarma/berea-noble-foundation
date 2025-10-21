<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use SoftDeletes;


    const COUNT_CACHE_KEY = 'DONATION_ENTRIES_COUNT';

    protected $fillable = [
        'name',
        'amount',
        'frequency',
        'email',
        'phone'
    ];
}
