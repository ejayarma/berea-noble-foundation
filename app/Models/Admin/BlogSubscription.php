<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogSubscription extends Model
{
    use SoftDeletes;
    protected $fillable = ['email'];
}
