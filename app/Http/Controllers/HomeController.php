<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usdt = Admins::where('id', '1')->first();

        return view('dashboard.pages.home', compact('usdt'));
    }

    public function add_products()
    {
        $usdt = Admins::where('id', '1')->first();

        return view('dashboard.pages.products.add_products', compact('usdt'));
    }
}
