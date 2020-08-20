@extends('dashboard.layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Cupons</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <h3 style="text-decoration: underline;">Cupon Details</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Cupon ID</label>
                                    <input type="text" class="form-control" placeholder="Enter ID" name="id">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>User Code</label>
                                    <input type="text" class="form-control" placeholder="Enter User Code"name="cupon">
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Product Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Code" name="id">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Price Range </label>
                                    <input type="text" class="form-control" placeholder="Enter Price Range" name="Price_range">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Usage Limit </label>
                                    <input type="text" class="form-control" placeholder="Enter Usage Limit" name="usage_limit">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Product Description" name="desc"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Properties </label>
                                    <input type="text" class="form-control" placeholder="Enter Properties" name="properties">
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
