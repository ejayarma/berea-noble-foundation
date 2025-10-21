<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "name",
        "position",
        "image",
        "facebook",
        "linkedin",
        "twitter",
        "email",
        "website",
    ];
}
