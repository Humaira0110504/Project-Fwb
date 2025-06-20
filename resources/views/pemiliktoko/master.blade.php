<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Penyewaan Baju Adat</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assetsAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/
    css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assetsAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">toko</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('toko.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Data Pesanan</span>
                </a>
            </li>

                   
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKategori" aria-expanded="true" aria-controls="collapseKategori">
        <i class="fas fa-fw fa-tags"></i>
        <span>Data Baju</span>
    </a>
    <div id="collapseKategori" class="collapse" aria-labelledby="headingKategori" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('lihat-baju') }}">Lihat Baju</a>
            <a class="collapse-item" href="{{ route('pemiliktoko.tambah-baju') }}">Tambah Baju</a>
        </div>
    </div>
</li>


        
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @yield('konten')
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Penyewaan Baju Adat 2025</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('assetsAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetsAdmin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assetsAdmin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
