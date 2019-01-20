<!DOCTYPE html>
<html>

<head>
    @include('partials.dash._head')

</head>

<body>
  <!-- Sidenav -->
  @include('partials.dash._sidenav')

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('partials.dash._navigation')

    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/dash/img/theme/img-1-1000x600.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class="display-2 text-white">Create a Listing</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
            <div class="row">
                    <div class="col-lg-6 ml-auto mr-auto">
                      <div class="card-wrapper">
                        <!-- Form controls -->
                        <div class="card">
                          <!-- Card header -->
                          <div class="card-header">
                            <h3 class="mb-0">Create a New Listing</h3>
                          </div>
                          <!-- Card body -->
                          <div class="card-body">
                            <form action="{{ route('listings.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlInput1">Address of Property</label>
                                <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="123 Example Ave.">
                              </div>

                              <div class="form-group">
                                <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">This property features x bedrooms, y bathrooms.</textarea>
                              </div>

                              <div class="form-group">
                                <label class="form-control-label" for="example-number-input">Price (CAD)</label>
                                <input class="form-control" type="number" name="price" value="1000" id="example-number-input">
                              </div>

                              <div class="form-group">
                                <label class="form-control-label" for="picture-upload">Picture of Property</label>
                                <input class="form-control" type="file" name="banner_image" id="picture-upload">
                            </div>



                              <div class="form-group">
                                <button type="submit" class="float-right btn btn-default">Create New Property</button>
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <br>
      <br>

      @include('partials.dash._footer')

    </div>
  </div>
  
  @include('partials.dash._scripts')
</body>

</html>