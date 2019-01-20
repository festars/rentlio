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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Listings</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active"><a href="{{ route('listings.index') }}">Listings</a></li>
                </ol>
              </nav>
            </div>

          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Listings Found</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $listings->count() }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row card-wrapper">
        
        @foreach($listings as $listing)
          <div class="col-lg-4">
            <!-- Basic with list group -->
            <div class="card">
              <!-- Card image -->
              <img class="card-img-top" src="{{ $listing->banner_image}}" alt="Image placeholder">
              <!-- List group -->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $listing->address }}</li>
                <li class="list-group-item"><small>{{substr($listing->description, 0, 100) . '...'}}</small></li>
              </ul>
              <!-- Card body -->
              <div class="card-body">
                <h3 class="card-title mb-3">${{ money_format('%i', $listing->price) }} <small>/ mo</small></h3>
                <a href="{{ route('listings.show', $listing) }}" class="btn btn-primary">View Listing</a>
              </div>
            </div>
          </div>
        @endforeach

        
      </div>
      <!-- Footer -->
      @include('partials.dash._footer')
    </div>
  </div>
  
  @include('partials.dash._scripts');
</body>

</html>