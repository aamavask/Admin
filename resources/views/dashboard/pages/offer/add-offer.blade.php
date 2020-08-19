  @extends('dashboard.layout.app')
  @section('content')

      <div class="row">
          <div class="col-md-12">
              <div class="card card-warning">
                  <div class="card-header">
                      <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Offer</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form role="form">
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Offer Name</label>
                                      <input type="text" class="form-control" placeholder="Offer Name" name="Category_name">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Offer code</label>
                                      <input type="text" class="form-control" placeholder="Offer code" name="Offer_code">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Product Code</label>
                                      <input type="text" class="form-control" placeholder="Product Code"
                                          name="Category_name">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Number</label>
                                      <input type="text" class="form-control" placeholder="Number" name="Offer_code">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                      <label for="Offer description">Offer description</label>
                                      <textarea class="form-control" rows="2" placeholder="Enter Offer description"
                                          id="Offer description"></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                      <label for="Offer Property">Offer Property</label>
                                      <textarea class="form-control" rows="2" placeholder="Enter Offer Property"
                                          id="Offer Property"></textarea>
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
