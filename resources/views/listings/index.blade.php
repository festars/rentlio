@extends('layouts.dash')

@section('content')


<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                  <span class="h2 font-weight-bold mb-0">350,897</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-muted text-sm">
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
<div class="container-fluid mt--7">

        <div class="row mt-5">
                <div class="col-xl-8 mb-5 mb-xl-0">
                  <div class="card shadow">
                    <div class="card-header border-0">
                      <div class="row align-items-center">
                        <div class="col">
                          <h3 class="mb-0">Page visits</h3>
                        </div>
                        <div class="col text-right">
                          <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Address</th>
                            <th scope="col">Landlord Name</th>
                            <th scope="col">Rent Price</th>
                            <th scope="col">Type</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($listings as $listing)
                          <tr>
                           
                            <td>
                             {{ $listing->address }}
                            </td>
                            <td>
                                {{ $listing->landlord->name }}
                            </td>
                            <td>
                                {{ $listing->price }}
                            </td>
                            <td>
                                {{ $listing->type }}
                            </td>
                          </tr>
                        @endforeach
                       
                        </tbody>
                      </table>
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

  @include('partials.dash._footer')
</div>

@endsection

                    