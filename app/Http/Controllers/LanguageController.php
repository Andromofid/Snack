<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
        $request->validate(['language' => 'required|string']);
        session(['locale' => $request->language]);
        App::setLocale($request->language);
        return redirect()->back();
    }
}
