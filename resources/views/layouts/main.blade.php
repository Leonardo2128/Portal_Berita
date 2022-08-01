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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script>
        tinymce.init({
            selector: '#inputContent',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
</head>
<body id="page-top">
    {{-- Interface Admin --}}
    @auth
    @if(in_array(Auth::user()->role, ['admin']))
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cuy News <sup>1.0</sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Category</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Components:</h6>
                        <a class="collapse-item" href="/category/1">Lifestyle</a>
                        <a class="collapse-item" href="/category/2">Culinary</a>
                        <a class="collapse-item" href="/category/3">Health</a>
                        <a class="collapse-item" href="/category/4">Education</a>
                        <a class="collapse-item" href="/category/5">Finance</a>
                        <a class="collapse-item" href="/category/6">Technology</a>
                        <a class="collapse-item" href="/category/8">Sport</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                            aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="fas fa-fw fa-wrench"></i>
                            <span>Utilities</span>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Custom Utilities:</h6>
                                <a class="collapse-item" href="/categories">Categories</a>
                                <a class="collapse-item" href="/contents">Content</a>
                                <a class="collapse-item" href="/datauser">Data User</a>
                            </div>
                        </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="/regis">Register</a>
                        <a class="collapse-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('info') }}">
                  <i class="fas fa-fw fa-info-circle"></i>
                  <span>Info Website</span></a>
              </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-gray bg-white topbar mb-4 static-top shadow fixed">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                        <ul class="navbar-nav me-auto ">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="/beranda"><i class="bi bi-house-door-fill"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/category/1"><i class="bi bi-people"></i>Lifestyle</a>
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
                                        <a class="nav-link" href="/category/8"><i class="bi bi-trophy"></i>Sport</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/categories"><i class="bi bi-file-text"></i> Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contents"><i class="bi bi-file-earmark-text"></i>Contents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/datauser"><i class="bi bi-journal-bookmark-fill"></i>Data User </a>
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
    @endif
    @endauth
    {{-- Interface User --}}
    @auth
    @if(in_array(Auth::user()->role, ['user']))
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-gray bg-gray topbar mb-4 static-top shadow ">
                        <a class="navbar-brand d-flex align-items-center ml-5" href="/home">
                            <div class="navbar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                            </div>
                            <div class="navbar-brand-text mx-3"><b>Cuy News<sup>1.0</sup></b> </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item ">
                            <a class="nav-link " href="/beranda"><i class="bi bi-house-door"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/1"><i class="bi bi-people"></i>Lifestyle</a>
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
                            <a class="nav-link" href="/category/8"><i class="bi bi-trophy"></i>Sport</a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>Hi, {{ Auth::user()->name }}</b></span>
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
    @endif
    @endauth
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
          </div>
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
