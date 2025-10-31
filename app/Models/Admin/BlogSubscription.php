<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogSubscription extends Model
{
    const COUNT_CACHE_KEY = 'BLOG_SUBSCRIPTION_ENTRIES_COUNT';

    use SoftDeletes;
    protected $fillable = ['email'];
}
