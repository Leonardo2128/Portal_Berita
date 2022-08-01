@extends('layouts.main')

@section('title')
    Home
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-2 text-primary ml-2">Home</h1>
            <p class="mb-4">
                The hottest collection of news of the day.a collection of the latest news that you can enjoy observing.
            </p>
            <hr>
            <div class="row">
                <div class="col-lg-10">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-danger">
                          <h6 class="m-0 font-weight-bold text-white text-center">Trending Now !!</h6>
                        </div>
                        <div class="row justify-content-center">
                            @foreach ($contents as $content )
                                <div class="col-md-4 mb-4 mt-2 ">
                                    <div class="card  border-bottom-dark ">
                                        <img src="{{url('uploads/')}}/{{$content->photo}}" height="100%" class="card-img-top" alt="{{$content->title}}">
                                        <div class="card-body h-100">
                                            <h5 class="card-title">{{ substr($content->title,0,50)."..." }}</h5>
                                            <p class="card-text">{{ substr($content->content,0,150)."..." }}</p>
                                            <a href="{{url('/')}}/read/{{$content->id}}" class="card-link">Read more</a>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated: {{ $content->updated_at }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                                <h6 class="m-0 font-weight-bold text-white text-center">Headlines News </h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                        @foreach ($contents as $content )
                            <div>
                                <div class="card-body">
                                    <a href="{{url('/')}}/read/{{$content->id}}" class="card-link"><p class="card-title">{{$content->title}}</p></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection




