<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale(Request $request, $locale)
    {
        // Store the selected locale in a session variable
        $request->session()->put('locale', $locale);

        return redirect()->back();
    }
}
