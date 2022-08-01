@extends('layouts.main')

@section('title')
    Data User
@endsection
@section('content')
    <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data User</h1>
            <p class="mb-4">
                Content is specific to admins adding, changing and deleting content. Data Content contains information about data that has been managed by admins.
            </p>
            <div class="card shadow mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php ($no = 1)
                                @foreach ($datauser as $user)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $user -> name }}</td>
                                    <td>{{ $user -> email }}</td>
                                    <td>{{$user ->created_at}}</td>
                                    <td>
                                        <a href="javascript:deleteuser('{{ $user->name }}' , {{ $user->id }})"><i class="bi bi-trash"></i>Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                function deleteuser ( data , id ) {
                    var r = confirm (" Delete data " + data + "?");
                    if (r == true ) {
                        window . location . replace ("/ deleteuser /" + id );
                     }
                }
            </script>
@endsection








