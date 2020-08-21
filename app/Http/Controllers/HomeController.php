<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use App\Service;
use App\Employee;

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

    public function add_cupons()
    {
        $usdt = Admins::where('id', '1')->first();

        return view('dashboard.pages.cupons.add_cupons', compact('usdt'));
    }

    public function add_customers()
    {
        $usdt = Admins::where('id', '1')->first();

        return view('dashboard.pages.customers.add_customers', compact('usdt'));
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
    public function add_offer()
    {
        $usdt = Admins::where('id', '1')->first();
        return view('dashboard.pages.offer.add-offer', compact('usdt'));
    }
    public function add_services_data_(REQUEST $req)
    {
        $data = new Service;
        $data->serv_name = $req->service_name ;
        $data->providers = $req->providers ;
        $data->category_id = $req->Category_ID ;
        $data->short_desc = $req->Short_description;
        $data->long_desc = $req->Long_description ;
        $data->specification= $req->speci;
        $data->highlights = $req->highlight ;
        $data->start_time = $req->Start_time ;
        $data->end_time = $req->End_time;
        $data->save();
    }
    public function add_employees_data_(REQUEST $req)
    {
        $data = new Employee;
        $data->First_name = $req->First_Name;
        $data->Last_name = $req->Last_Name;
        $data->Email = $req->Email;
        $data->Password = $req->password;
        $data->Img = $req->Image;
        $data->Address = $req->Address;
        $data->DOB = $req->DOB;
        $data->Aadhar_card = $req->Aadhar;
        $data->Mobile_no = $req->Mobile;
        $data->save();							
    }
    
}
