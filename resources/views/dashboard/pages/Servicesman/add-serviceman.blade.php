@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Service-man</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>EMAIL</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Enter EMAIL" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Put Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="put_image">
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                        </div>
                                        <input type="tel" class="form-control" placeholder="Enter Mobile Number" name="number">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Employee Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Employee Address"
                                        name="employee_address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>DOB</label>
                                    <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="dob">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Adhaar-Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Aadhar Number" name="adhaar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Shop Name</label>
                                    <input type="text" class="form-control" placeholder="Shop Name" name="shop_name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Orders Completed</label>
                                    <input type="number" class="form-control" placeholder="Orders completed"
                                        name="order">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Shop Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="shop_image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Shop Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Shop Address"
                                        name="shop_address">
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
        </div>
    </div>


@endsection
