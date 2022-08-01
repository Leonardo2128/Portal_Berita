@extends('layouts.main')

@section('title')
    Update Category
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-3 text-gray-800 ml-4 mt-0">Update Category</h1>
        <div class="card shadow mt-4">
            <form method="post" action="{{url('categories')}}/{{$category['id']}}">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label ml-4 mt-4">Category</label>
                    <div class="col-sm-9 mt-4">
                        <input type="text" name="category" class="form-control" value="{{$category['category']}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-auto">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary mb-3 ml-4">
                            <i class="bi bi-pencil"></i> Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
@endsection
