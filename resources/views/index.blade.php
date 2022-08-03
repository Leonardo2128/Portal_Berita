@extends('layouts.main')

@section('title')
    Dashboard
@endsection
@section('content')

    <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800 ml-4 justify-content-between mb-4">Welcome to Cuy News</h1>
            @auth
            @if(in_array(Auth::user()->role, ['admin']))
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tasks Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                              <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
                @endauth
        <div class="card shadow mt-4 border-left-secondary">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Welcome Message !!</h6>
            </div>
                <div class="card-body">
                    <p>Welcome to Cuy News, <b >{{ Auth::user()->name }} </b></p>
                    <p class="mb-0">The latest news portal "Cuy News" that presents various types of information that are up-to-date and interesting both outside and within the country to read. Don't give your account to anyone!!<br> Don't forget to continue subscribing on our Website!! enjoy</p>
                </div>
            </div>
        </div>
    @auth
    @if(in_array(Auth::user()->role, ['user']))
    <div class="container-fluid">
        <h1 class="h3 mb-4 mt-4 text-gray-800 ml-4">Info Website</h1>
    </div>
    <div class="container-fluid">
    <div class="card shadow mb-4 border-left-secondary">
         <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary">Pengembang</h6>
        </div>
        <div class="card-body">
            This website is managed and developed individually by Leonardo, this Website was created with the help of the SB Admin Template downloaded from Color Lib. This website is used for the purposes of the Final Semester Exams of Framework-Based Programming Courses.
        </div>
    </div>
    <div class="card shadow mb-8 ">
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">Versi Website</h6>
        </a>
        <div class="collapse " id="collapseCardExample">
            <div class="card-body">
                Cuy News Versi 1.0
            </div>
        </div>
    </div>
    @endif
    @endauth
@endsection

