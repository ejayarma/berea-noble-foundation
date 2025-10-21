<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Admin\TeamMember;
use Illuminate\Support\Facades\Storage;

class AboutUsPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $members = TeamMember::query()
        ->get()
        ->map(function ($member) {
                return [
                    'id' => $member->id,
                    'name' => $member->name,
                    'position' => $member->position,
                    'image' => Storage::url($member->image),
                    'alt' => $member->name. ' - ' . $member->position,
                ];
            });

        return Inertia::render('AboutUs',
    [
        'teamMembers' => $members
    ]);
    }
}
