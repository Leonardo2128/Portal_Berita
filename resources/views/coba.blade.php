@extends('layouts.main')

@section('title')
    Contents
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Content</h1>
            <p class="mb-4">
                Content is specific to admins adding, changing and deleting content. Data Content contains information about data that has been managed by admins.
            </p>
        <div class="card shadow mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Content</h6>
            </div>
            <div class="card-body justify-content-center">
                <div class="table-responsive">
                    <div class="align-items-center">
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
            </div>
        </div>
@endsection


