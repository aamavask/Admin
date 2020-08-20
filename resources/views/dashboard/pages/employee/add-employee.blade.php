@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Empolyee</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Put Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address"
                                        name="Product_Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="date" class="form-control" placeholder="Date Of Birth"
                                        name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Addhar-card</label>
                                    <input type="text" class="form-control" placeholder="Aadhar card" name="Product_Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                    </div>
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
            <!-- /.card -->
            <!-- general form elements disabled -->

            <!-- /.card -->
        </div>
    </div>


@endsection
