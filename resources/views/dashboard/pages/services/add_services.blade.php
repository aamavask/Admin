





@extends('dashboard.layout.app')
  @section('content')

        <div class="row">
          <div class="col-md-12">
            <!-- add products form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Services</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <h3 style="text-decoration: underline;">Service Basic Details</h3>
                  <div class="row">
                    <div class="col-sm-10">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Service Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                      </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 d-flex align-items-end justify-content-center">
                      <!-- text input -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input align-bottom" type="checkbox">
                          <label class="form-check-label align-bottom">Virtual</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 d-flex align-items-end justify-content-center">
                      <!-- text input -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input align-bottom" type="checkbox">
                          <label class="form-check-label align-bottom">Downloadable</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Service Description</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Variants</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sizes</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dimensions</label>
                        <input type="text" class="form-control" placeholder="Length-Bregth-height" name="Product_Title">
                      </div>
                    </div>
                  </div>  
                  <hr>
                  <h3 style="text-decoration: underline;">Product Basic Details</h3>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>SKU</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Regular Price</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Regular Price</label>
                        <input type="text" class="form-control" placeholder="Title" name="Product_Title">
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
                  </div> 

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Disabled</label>
                        <select class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Select multiple-->
                      <div class="form-group">
                        <label>Select Multiple</label>
                        <select multiple class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select Multiple Disabled</label>
                        <select multiple class="form-control" disabled>
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
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