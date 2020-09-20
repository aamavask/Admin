<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_category()
    {
        return view('pages.add_category');
    }

    public function add_cupons()
    {
        return view('pages.add_cupons');
    }

    public function add_customer()
    {
        return view('pages.add_customer');
    }

    public function add_deliveryman()
    {
        return view('pages.add_deliveryman');
    }

    public function add_employee()
    {
        return view('pages.add_employee');
    }

    public function add_product()
    {
        return view('pages.add_product');
    }

    public function add_serviceman()
    {
        return view('pages.add_serviceman');
    }

    public function add_services()
    {
        return view('pages.add_services');
    }

    public function add_vendors()
    {
        return view('pages.add_vendors');
    }

    /* CONTROLLERS */
    public function add_category_data(REQUEST $req)
    {
        $catg = new Category;
        $catg->Category_Name = $req->category_name;
        $catg->Category_Type = $req->category_type;
        $catg->Parent_Category = $req->parent_category;
        $catg->Category_Description = $req->category_desc;
        $catg->save();
    }

    public function add_cupon_data(REQUEST $req)
    {
        $cup = new Cupon;
        $cup->Cupon_ID = $req->cid;
        $cup->User_Code = $req->user;
        $cup->Product_Code = $req->p_code;
        $cup->Price_Range = $req->Price_range;
        $cup->Usage_Limit = $req->usage_limit;
        $cup->Product_Description = $req->desc;
        $cup->Properties = $req->properties;
        $cup->save();
    }

    public function add_customer_data(REQUEST $req)
    {
        $cus = new Customer;
        $cus->Username = $req->username;
        $cus->First_Name = $req->firstname;
        $cus->Last_Name = $req->lastname;
        $cus->Cupon_ID = $req->cupon_id;
        $cus->DOB = $req->dob;
        $cus->Phone_Number = $req->phone;
        $cus->Put_Image = $req->put_image;
        $cus->save();
    }

    public function add_deliveryman_data(REQUEST $req)
    {
        $del = new Deliveryman;
        $del->First_Name = $req->first_name;
        $del->Last_Name = $req->last_name;
        $del->Email = $req->email;
        $del->Password = $req->password;
        $del->Put_Image = $req->put_image;
        $del->Mobile_Number = $req->number;
        $del->Employee_add = $req->employee_address;
        $del->DOB = $req->dob;
        $del->Adhaar_Number = $req->adhaar;
        $del->Vehicle_1 = $req->v1;
        $del->Vehicle_2 = $req->v2;
        $del->Ord_Completed = $req->order;
        $del->save();
    }

    public function add_employee_data(REQUEST $req)
    {
        $emp = new Employee;
        $emp->First_Name = $req->fname;
        $emp->Last_Name = $req->lname;
        $emp->Email = $req->email;
        $emp->Password = $req->pwd;
        $emp->Put_Image = $req->img;
        $emp->Address = $req->address;
        $emp->DOB = $req->dob;
        $emp->Adhaar_Number = $req->adhaar;
        $emp->Mobile_Number = $req->mob;
        $emp->save();
    }

    public function add_product_data(REQUEST $req)
    {
        $prod = new Product;
        $prod->Product_Name = $req->Product1;
        $prod->Virtuals = $req->virtual;
        $prod->Downloadable = $req->down;
        $prod->Highlights = $req->Product2;
        $prod->Short_Desc = $req->Product3;
        $prod->Long_Desc = $req->Product4;
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
        $prod->Backorder_Options = $req->Product20;
        $prod->Max_Order = $req->Product21;
        $prod->Tags = $req->Product22;
        $emp->save();
    }

    public function add_serviceman_data(REQUEST $req)
    {
        $servman = new Serviceman;
        $servman->First_Name = $req->first_name;
        $servman->Last_Name = $req->last_name;
        $servman->Email = $req->email;
        $servman->Password = $req->password;
        $servman->Put_Image = $req->put_image;
        $servman->Mobile_Number = $req->number;
        $servman->Employee_Address = $req->employee_address;
        $servman->DOB = $req->dob;
        $servman->Adhaar_Number = $req->adhaar;
        $servman->Shop_Name = $req->shop_name;
        $servman->Ord_Completed = $req->order;
        $servman->Shop_Image = $req->shop_image;
        $servman->Shop_Address = $req->shop_address;
        $servman->save();
    }

    public function add_services_data(REQUEST $req)
    {
        $ser = new Services;
        $ser->Service_Name = $req->service_name;
        $ser->Providers = $req->providers;
        $ser->Category_ID = $req->category_ID;
        $ser->Short_Desc = $req->short_desc;
        $ser->Long_Desc = $req->long_desc;
        $ser->Specification = $req->speci;
        $ser->Highlights = $req->high;
        $ser->Start_Time = $req->startime;
        $ser->End_Time = $req->endtime;
        $ser->save();
    }

    public function add_vendors_data(REQUEST $req)
    {
        $vend = new Vendorss;
        $vend->Shop_Name = $req->shop_name;
        $vend->Owner_Name = $req->owner_name;
        $vend->Address_1 = $req->address1;
        $vend->Address_2 = $req->address2;
        $vend->Put_Image = $req->put_image;
        $vend->Mobile_Number = $req->number;
        $vend->Shop_Address = $req->shop_address;
        $vend->save();
    }

}
