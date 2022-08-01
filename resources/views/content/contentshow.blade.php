@extends('layouts.main')

@section('title')
    Delete Contents
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card shadow mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Delete Content</h6>
            </div>
            <div class="card-body justify-content-center">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form action="/contents/{{$content->id}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <div>
                                {{$content->id_cat}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <div>
                                {{$content->title}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <div>
                                {{$content->content}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <div>
                                {{$content->photo}}
                            </div>
                        </div>
                        <div class="mb-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">DELETE</button>
                        </div>
                    </form>
                </table>
                </div>
            </div>
        </div>
@endsection
