<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function changeLanguage(Request $request)
    {
        // App::setLocale('ru');
        // Session::set('locale', 'ru');
        return redirect()->back();
    }
}
