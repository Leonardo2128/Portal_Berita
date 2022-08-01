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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Update At</th>
                                    <th scope="col" width="80"><a href="contents/create"><button type="submit" class="btn btn-primary  ml-0"><i class="bi bi-plus-circle"></i> Add </button></a>
                                    </th>
                                </tr>
                            <tbody>
                                @php ($no = 1)
                                @foreach ($contents as $content )
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{$content->get_category['category']}}</td>
                                    <td>{{$content['title']}}</td>
                                    <td>{{ substr($content->content,0,150)."..." }}</td>
                                    <td>
                                        <img src="uploads/{{$content['photo']}}" width="120px">
                                    </td>
                                    <td>{{$content['updated_at']}}</td>
                                    <td>
                                        <div class="ml-1">
                                            <a href="/contents/{{$content['id']}}/edit">Edit</a>
                                            |
                                            <a href="/contents/{{$content['id']}}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


