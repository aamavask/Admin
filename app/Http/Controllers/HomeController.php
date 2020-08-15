<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use App\Product;

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
    public function prodinsert(REQUEST $req)
    {
        $prod = new Product;
        $prod->prodname = $req->prodname;
        $prod->prodid = $req->prodid;
        $prod->stock = $req->stock;
        $prod->shortdesc = $req->shortdesc;
        $prod->longdesc = $req->longdesc;
        $prod->save();
    }
// to show tableform insert present in view (tableform)
    public function prodinfo()
    {
        return view('dashboard.pages.products.tableform');
    }

    public function retrive()
    {
        $ret = Product::all();
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.services.add-service', compact('ret'), compact('usdt'));
    }
    public function service1()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.services.add-service', compact('usdt'));
    }
    public function add_emp(){
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.employee.add-employee', compact('usdt')); 
    }
    public function add_serviceman()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.Serviceman.add-service-man', compact('usdt'));
    }
   
    public function add_deliverman()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.Deliever-man.add-deliverman', compact('usdt'));
    }
}

