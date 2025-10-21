<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use WisdomDiala\Countrypkg\Models\Country;

class ContactForm extends Model
{
    use SoftDeletes;

    const COUNT_CACHE_KEY = 'CONTACT_FORM_ENTRIES_COUNT';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'organization',
        'country',
        'message',
        'subject',
        'geo_data',
    ];

    protected $casts = [
        'geo_data' => 'array'
    ];

    public function countryInfo(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country', 'short_name');
    }
}
