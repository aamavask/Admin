  @extends('dashboard.layout.app')
  @section('content')

      <div class="row">
          <div class="col-md-12">
              <div class="card card-warning">
                  <div class="card-header">
                      <h3 class="card-title" style=" text-transform: uppercase; font-weight: bold;">Add Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form role="form" action="/add-category-data" method="POST">
                        @csrf
                          <div class="row">
                              <div class="col-sm-4">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Category Name</label>
                                      <input type="text" class="form-control" placeholder="Category Name"
                                          name="category_name">
                                  </div>
                              </div>
                              <div class="col-4">
                                  <!-- select -->
                                  <div class="form-group">
                                      <label>Category Type</label>
                                      <select class="form-control" name="category_type">
                                          <option>Product</option>
                                          <option>Service</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-4">
                                  <!-- select -->
                                  <div class="form-group">
                                      <label>Parent Category</label>
                                      <br>
                                      <input list="browsers" class="form-control" name="parent_category" id="browser">
                                      <datalist id="browsers">
                                          <option value="Edge">
                                          <option value="Firefox">
                                          <option value="Chrome">
                                          <option value="Opera">
                                          <option value="Safari">
                                      </datalist>
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
