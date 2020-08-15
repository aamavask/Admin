@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form">
                        <h3 style="text-decoration: underline;">Product Basic Details</h3>
                        <div class="row">
                            <div class="col-sm-10">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="p_name">Product Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name"
                                        name="Product_Title" id="p_name">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-2 d-flex align-items-end justify-content-center"
                                style="margin-bottom: 30px">
                                <!-- text input -->
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitches">
                                    <label class="custom-control-label" for="customSwitches">Virtuals</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-2 d-flex align-items-end justify-content-center"
                                style="margin-bottom: 30px">
                                <!-- text input -->
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2" disabled>
                                    <label class="custom-control-label" for="customSwitch2">Downloadable</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="highlights">Highlights</label>
                                    <textarea class="form-control" rows="2" placeholder="Enter Highlights"
                                        id="highlights"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="s_desc">Short Discription</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter Description"
                                        id="s_desc"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="l_desc">Long Discription</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter Description"
                                        id="l_desc"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label for="speci">Specifications</label>
                                    <textarea class="form-control" rows="4" placeholder="Enter Specifications"
                                        id="speci"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="pro">Providers</label>
                                    <input type="text" class="form-control" placeholder="Enter Provider Code"
                                        name="Product_Title" id="pro">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="weight">Weights</label>
                                    <input type="text" class="form-control" placeholder="Enter Weight (e.g.:30 Kg)"
                                        name="Product_Title" id="weight">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sizes</label>
                                    <select class="form-control">
                                        <option>XS (Extra Small)</option>
                                        <option>S (Small)</option>
                                        <option>M (Medium)</option>
                                        <option>L (Large)</option>
                                        <option>XL (Extra Large)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="dimension">Dimensions</label>
                                    <input type="text" class="form-control"
                                        placeholder="Length-Bregth-height (e.g.:12cm-4cm-7cm)" name="Product_Title"
                                        id="dimension">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="Category_ID">Category ID</label>
                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product_Title"
                                        id="Category_ID">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="v_id">Varient ID</label>
                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product_Title"
                                        id="v_id">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 style="text-decoration: underline;">Pricing and Tax</h3>
                        <div class="row">

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Regular Price</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Price">

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Sales Price</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Price">

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tax Class</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Tax Class">

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Shipping Class</label>
                                    <div class="input-group mb-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter Shipping Class">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 style="text-decoration: underline;">Vendor And Stock Details</h3>
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="sku">SKU</label>
                                    <input type="text" class="form-control" placeholder="Enter SKU" name="Product_Title"
                                        id="sku">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="vendor">Vendor ID</label>
                                    <input type="text" class="form-control" placeholder="Enter ID" name="Product_Title"
                                        id="vendor">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="number" class="form-control" placeholder="Enter stock" name="Product_Title"
                                        id="stock">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="s_alert">Stock Alert</label>
                                    <input type="number" class="form-control" placeholder="Enter Stock Alert"
                                        name="Product_Title" id="s_alert">
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
                                    <label for="bulk">Max Number of order in bulk</label>
                                    <input type="number" class="form-control" placeholder="Enter Number of Orders"
                                        name="Product_Title" id="bulk">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h3 style="text-decoration: underline">SEO</h3>
                        <div class="row">

                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label for="tag">Tags</label>
                                    <input type="text" class="form-control" placeholder="Enter Tags" name="Product_Title"
                                        id="tag">
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
