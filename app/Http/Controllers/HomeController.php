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
    public function add_services()
    {
        $usdt = Admins::where('id', '1')->first();

        return view('dashboard.pages.services.add_services', compact('usdt'));
    }
    public function add_emp()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.employee.add-employee', compact('usdt'));
    }
    public function add_vendor()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.Rvendor.add-vendor', compact('usdt'));
    }
    public function add_serviceman()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.Servicesman.add-serviceman', compact('usdt'));
    }
    public function add_deliverman()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.Deliverman.add-deliverman', compact('usdt'));
    }
    public function add_category()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.category.add-category', compact('usdt'));
    }
}

