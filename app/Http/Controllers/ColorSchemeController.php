<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ColorSchemeController extends Controller
{
    /**
     * Show specified view.
     */
    public function switch(Request $request): RedirectResponse
    {
        session([
            'color_scheme' => $request->color_scheme,
        ]);

        return back();
    }
}
