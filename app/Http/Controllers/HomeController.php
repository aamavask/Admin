<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use App\Service;
use App\Employee;
use App\Product;
use App\Category;
use App\Serviceman;

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
  
    

    public function add_products_data(REQUEST $req)
    {
        $prod = new Product;
        $prod->Product_Name = $req->Product1;
        $prod->Highlights = $req->Product2;
        $prod->Short_Description = $req->Product3;
        $prod->Long_Description = $req->Product4;
        $prod->Specifications = $req->Product5;
        $prod->Providers = $req->Product6;
        $prod->Weights = $req->Product7;
        $prod->Sizes = $req->Product8;
        $prod->Dimensions = $req->Product9;
        $prod->Category_ID = $req->Product10;
        $prod->Varient_ID = $req->Product11;
        $prod->Regular_Price = $req->Product12;
        $prod->Sales_Price = $req->Product13;
        $prod->Tax_Class = $req->Product14;
        $prod->Shipping_Class = $req->Product15;
        $prod->SKU = $req->Product16;
        $prod->Vendor_ID = $req->Product17;
        $prod->Stock = $req->Product18;
        $prod->Stock_Alert = $req->Product19;
        $prod->Back_Order_Options = $req->Product20;
        $prod->Max_Number_of_order_in_bulk = $req->Product21;
        $prod->Tags = $req->Product22;
        $prod->save();
    }

    public function add_category_data(REQUEST $req)
    {
        $catg = new Category;
        $catg->Category_Name = $req->category_name;
        $catg->Category_Type = $req->category_type;
        $catg->Parent_Category = $req->parent_category;
        $catg->save();
    }

    public function add_serveceman_data(REQUEST $req)
    {
        $serviceman = new Serviceman;
        $serviceman->First_Name = $req->first_name;
        $serviceman->Last_Name = $req->last_name;
        $serviceman->Email = $req->email;
        $serviceman->Password = $req->password;
        $serviceman->Put_Image = $req->put_image;
        $serviceman->Mobile_Number = $req->number;
        $serviceman->Employee_Address = $req->employee_address;
        $serviceman->DOB = $req->dob;
        $serviceman->Adhaar_Number = $req->adhaar;
        $serviceman->Shop_Name = $req->first_name;
        $serviceman->Order_Completed = $req->first_name;
        $serviceman->Shop_Image = $req->first_name;
        $serviceman->Shop_Address = $req->first_name;
        $serviceman->save();
    }
    public function add_employee_data(REQUEST $req){
        $data = new Employee;
        $data->First_Name = $req->First_Name;
        $data->Last_Name = $req->Last_Name;
        $data->Email = $req->Email;
        $data->Password = $req->password;
        $data->Address = $req->Address;
        $data->DOB = $req->DOB;
        $data->Aadhar= $req->Aadhar;
        $data->Mobile= $req->Mobile;
        if ($req->hasFile('Img'))
        {
            $filename = $req->Img->getClientOriginalName();
            $file_details =  $req->Img->move('uploads', $filename);
            $data->Img = $file_details; 
        }
        $data->save();			
    }
}
