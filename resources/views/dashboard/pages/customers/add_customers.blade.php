@extends('dashboard.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Customers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <h3 style="text-decoration: underline;">Customer Details</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="user_name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter First Name"name="firstname">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name"name="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Cupon ID </label>
                                    <input type="text" class="form-control" placeholder="Enter Cupon ID" name="cupon_id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" placeholder="(yyyy/mm/dd)"name="dob">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Phone Number </label>
                                    <input type="number" class="form-control" placeholder="Enter Number"name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                               <div class="form-group">
                                    <label>Profile Pic Link</label><br>
                                    <input type="text" class="form-control" name="profilepic" placeholder="Enter Link">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

        @endsection
