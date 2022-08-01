<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cuy News - @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient- navbar navbar-dark accordion" id="accordionNavbar"></ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-gray bg-Azure topbar mb-4 static-top shadow ">
                        <a class="navbar-brand d-flex align-items-center ml-5" href="/home">
                            <div class="navbar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                            </div>
                            <div class="navbar-brand-text mx-3" >Cuy News <sup>1.0</sup></div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item ">
                            <a class="nav-link " href="/beranda"><i class="bi bi-house-door-fill"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/1"><i class="bi bi-activity"></i>Lifestyle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/2"><i class="bi bi-bag"></i></i>Culinary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/3"><i class="bi bi-clipboard2-plus"></i> Health</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/4"><i class="bi bi-mortarboard"></i>Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/5"><i class="bi bi-cash-coin"></i></i>Finance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/6"><i class="bi bi-cpu"></i>Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/8"><i class="bi bi-award"></i>Sport</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('info') }}">
                              <i class="fas fa-fw fa-info-circle"></i>
                              <span>Info Website</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, {{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
            <footer class="sticky-footer bg-white ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a href="https://leonardo2128.github.io/">Leonardo 2022</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/mharmltgg852jmzxt7lo3sw6xzmushne06zfqdftbzm1ou34/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#inputContent',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.jsvendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
</body>
</html>
