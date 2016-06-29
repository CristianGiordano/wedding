<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Rsvp;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage($page = 'home')
    {
        return view($page);
    }

    public function searchForInvite($query)
    {
        $query = strtolower($query);

        $rsvp = Rsvp::where('surname', 'LIKE',  "%{$query}%")->get();

        return $rsvp;
    }

    public function handleRsvp(Rsvp $rsvp, Request $request)
    {
        $rsvp->update([
            'is_attending'             => $request->input('is_attending') == 'yes',
            'preference_arrival_drink' => $request->input('preference_arrival_drink'),
            'preference_table_drink'   => $request->input('preference_table_drink'),
            'has_dietry_requirements'  => $request->input('has_dietry_requirements') == 'yes',
            'dietry_requirements'      => $request->input('dietry_requirements'),
            'comments'                 => $request->input('comments', ''),
            'guests'                   => $request->input('guests'),
        ]);

        return $rsvp;
    }
}
