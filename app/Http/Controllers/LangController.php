<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lang');
    }

    /**
     * Display a listing of the resource.
     */
    public function change(Request $request): \Illuminate\Http\RedirectResponse
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
