@extends('dashboard.layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="form-group">
                <label>Id</label>
                <input type="text" class="form-control" placeholder="Enter Id...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Vendor Id</label>
                <input type="text" class="form-control" placeholder="Enter Vendor Id...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Shop Name</label>
                <input type="text" class="form-control" placeholder="Enter Shop Name...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Owner Name</label>
                <input type="text" class="form-control" placeholder="Enter Owner Name...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Address Proof 1</label>
                <input type="text" class="form-control" placeholder="Enter Your id number...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Address Proof 2</label>
                <input type="text" class="form-control" placeholder="Enter Your id number...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Address Proof 1</label>
                <input type="text" class="form-control" placeholder="Enter Your id number...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                    <label for="img">Shop image: </label>
                     <input  style="border: 2px solid black; border-radius: 8px" type="file" id="img" name="img">
            </div>
            <hr>
            <div class="form-group">
                <label>Shop Address</label>
                <input type="text" class="form-control" placeholder="Enter address...." name="Product_Title">
            </div>
            <hr>
            <div class="form-group">
                <label>Phone Number:</label>
                <input type="number" class="form-control" placeholder="Enter address...." name="Product_Title">
            </div>
            <hr>
        </div>
    </div>
@endsection
