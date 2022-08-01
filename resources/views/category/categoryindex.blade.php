@extends('layouts.main')

@section('title')
    Categories
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Categories</h1>
            <p class="mb-4">
                Data Categoris are where to contain different types of categories
            </p>
        <div class="card shadow mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Categoris</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Update At</th>
                                <th scope="col"><a href="categories/create"><button type="submit" class="btn btn-primary  ml-0"><i class="bi bi-plus-circle"></i> Add</button>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php ($no = 1)
                            @foreach ($categories as $category)


                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{$category->category}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>
                                    <div class="">
                                        <a href="/categories/{{$category->id}}"> Edit</a>
                                        |
                                        <a href="/categories/{{$category->id}}/edit"> Delete</a>
                                     </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection


