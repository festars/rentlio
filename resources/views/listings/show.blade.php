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
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url({{ $listing->banner_image }}); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class="display-2 text-white">{{ $listing->address }}</h1>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Property Price</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">${{ money_format('%i', $listing->price) }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap text-light">Rent Per Month</span>
                  </p>
                </div>

            
              </div>
            </div>


            <div class="col-md-4">
                <div class="card bg-gradient-info border-0">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Landlord Information</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">{{ $listing->landlord->name }} {{ $listing->landlord->name === auth()->user()->name ? '(You!)' : ''}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                          <i class="ni ni-circle-08"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                      <span class="text-nowrap text-light">{{ $listing->landlord->email }}</span>
                    </p>
                  </div>
  
              
                </div>
              </div>

              @if($listing->landlord->name === auth()->user()->name)
              <div class="col-md-4">
                  <div class="card bg-gradient-info border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white">Open The Door</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">Status: Door is currently <span id="state-door">closed</span>.</span>
                        <br>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-green text-dark rounded-circle shadow">
                            <i class="ni ni-lock-circle-open"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                          <button href="#" id="open-door" class="btn btn-primary">Open Door</button>

                          <button href="#" id="close-door" class="btn btn-primary" style="visibility: hidden;">Close Door</button>
                      </p>
                    </div>
    
                
                  </div>
                </div>
                @endif

              @tenant
              <div class="col-md-4">
                  <div class="card bg-gradient-info border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white">Pay Your Rent</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">${{ money_format('%i', $listing->price) }} Due</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-green text-dark rounded-circle shadow">
                            <i class="ni ni-basket"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        <span class="text-nowrap text-light">Using Stripe Connect</span>
                      </p>
                    </div>
    
                
                  </div>
                </div>
                @endtenant



                
          </div>
        </div>
      </div>

      @tenant
      <div class="row">
          <div class="col-lg-4">
              <!-- Pricing card -->
              <div class="card card-pricing border-0 text-center mb-4">
                <div class="card-header bg-transparent">
                  <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Rent is Due</h4>
                </div>
                <div class="card-body px-lg-7">
                <div class="display-2">${{ money_format('%i', $listing->price) }}</div>
                  <span class=" text-muted">January 20th 2019</span>
                  <ul class="list-unstyled my-4">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-gradient-primary text-white shadow rounded-circle">
                            <i class="fas fa-pen-fancy"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm">Type: {{ $listing->type }}</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <div class="icon icon-xs icon-shape bg-gradient-primary text-white shadow rounded-circle">
                            <i class="fas fa-hdd"></i>
                          </div>
                        </div>
                        <div>
                          <span class="pl-2 text-sm">{{ $listing->address }}</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <form action="{{ route('payment.process', $listing) }}" method="POST">
                              
                      {{ csrf_field() }}
  
                      <script 
                          src="https://checkout.stripe.com/checkout.js"
                          class="stripe-button"
                          data-email="{{ \App\User::first()->email }}"
                          data-key="{{\App\User::first()->stripe_key }}"
                          data-amount="{{ $listing->price*100 }}"
                          data-name="Pay for Rent"
                          data-description="{{ $listing->address }}"
                          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                          data-locale="auto"
                          data-currency="cad"
                      ></script>
                  </form>
                </div>
              </div>
            </div>


                  

      </div>
      @endtenant

      
      
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

  <script>
    $('#open-button').click(function() {
      $.get("http://bc66329e.ngrok.io/turnon", function(data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      });
      $('#state-door').html('opened');
      $('#open-button').hide();
      $('#close-button').show();
    });

    $('#close-button').click(function() {
      $.get("http://bc66329e.ngrok.io/turnoff", function(data, status) {
        alert("Data: " + data + "\nStatus: " + status);
      });
      $('#state-door').html('closed');
      $('#open-button').show();
      $('#close-button').hide();
    });
  </script>
</body>

</html>





