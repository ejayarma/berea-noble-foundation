<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPostCategory extends Model
{
    use SoftDeletes;

    protected $fillable = ["name", "slug"];
}
