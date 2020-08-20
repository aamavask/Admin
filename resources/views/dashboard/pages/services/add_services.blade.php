@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"
                        style=" text-transform: uppercase; font-weight: bold; background-color: palevioletred;">Add Services
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <h3 style="text-decoration: underline;">Product Basic Details</h3>
                        <div class="row">

                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="Service_name">Service name</label>
                                    <input type="text" class="form-control" placeholder="Service Name" id="Service_name"
                                        name="Service name">
                                </div>
                            </div>

                        </div>

                        <hr>
                        <h3 style="text-decoration: underline;">Availability</h3>
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="Providers">Providers</label>
                                    <input type="text" class="form-control" placeholder="Providers" name="Providers"
                                        id="Providers">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="Category_ID">Category ID</label>
                                    <input type="text" class="form-control" placeholder="Category ID" name="Category ID"
                                        id="Category_ID">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="Short_desc">Short Discription</label>
                                    <textarea class="form-control" rows="3" placeholder="Short Discription..."
                                        id="Short_desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="Long_desc">Long Discription</label>
                                    <textarea class="form-control" rows="5" placeholder="Long Discription..."
                                        id="Long_desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="speci">Specification</label>
                                    <textarea class="form-control" rows="5" id="speci"
                                        placeholder="Specification..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="highlights">Highlights</label>
                                    <textarea class="form-control" rows="2" id="highlights"
                                        placeholder="Highlights..."></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h3 style="text-decoration: underline;">Availability</h3>
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="Start_Time">Start Time</label>
                                    <input type="text" class="form-control" placeholder="Title" id="Start_Time"
                                        name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>End Time</label>
                                    <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- <h3 style="text-decoration: underline;">Vendor And Stock Details</h3>
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Vendor ID</label>
                                    <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stock Alert</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Back-Order Options</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Max Number of order in bulk</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 style="text-decoration: underline;">Product Basic Details</h3>
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Stock Alert</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Back-Order Options</label>
                                    <select class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Max Number of order in bulk</label>
                                    <input type="number" class="form-control" placeholder="Title" name="Product_Title">
                                </div>
                            </div>
                        </div> --}}
                        

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"
                                style="display: block; margin-left: auto; margin-right: auto">Submit</button>
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
