@extends('layouts.main')

@section('title')
    Tambah Category
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-3 text-gray-800 ml-4 mt-0">Tambah Category</h1>
        <div class="card shadow mt-4">
            <form method="post" action="{{url('categories')}}">
                <div class="mb-3 row">
                    <span class="col-sm-2 col-form-label ml-4 mt-4">Category</span>
                    <div class="col-sm-9 mt-4">
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-auto">
                        @csrf
                        <button type="submit" class="btn btn-primary mb-3 ml-4">
                            <i class="bi bi-plus-circle"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
@endsection


