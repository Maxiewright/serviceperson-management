<?php

namespace App\Http\Controllers;

class PageDashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        return view('pages.dashboard', compact('user'));
    }
}
