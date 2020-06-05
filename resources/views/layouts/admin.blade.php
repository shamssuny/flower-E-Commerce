<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('dashboard/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('dashboard/css/admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <!-- <a class="navbar-brand" href="../index.html">Garden Of Roses</a> -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fahim" id="user-info">
                <a href="{{ url('auth/dashboard') }}">
                    <img src="{{ asset('../icon/logo.png') }}" class="logo">
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('auth/dashboard') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Visit Site</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-cube"></i>
                    <span class="nav-link-text">Products</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="{{ url('auth/product/add') }}">
                            <i class="fa fa-fw fa-plus"></i>
                            Add Products</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/product/view') }}">
                            <i class="fa fa-fw fa-eye"></i>
                            View Product</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/product/view') }}">
                            <i class="fa fa-fw fa-trash"></i>
                            Delete Product</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Activity">
                <a class="nav-link" href="{{ url('auth/order') }}">
                    <i class="fa fa-fw fa-briefcase"></i>
                    <span class="nav-link-text">Order</span>
                </a>

            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePost" data-parent="#exampleAccordion">
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    <span class="nav-link-text">Post</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapsePost">
                    <li>
                        <a href="{{ url('auth/post/add') }}">
                            <i class="fa fa-fw fa-plus"></i>
                            Add Post</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/post/view') }}">
                            <i class="fa fa-fw fa-eye"></i>
                            View Post</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/post/view') }}">
                            <i class="fa fa-fw fa-trash"></i>
                            Delete Post</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFaq" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-info-circle"></i>
                    <span class="nav-link-text">Faq</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseFaq">
                    <li>
                        <a href="{{ url('auth/faq/add') }}">
                            <i class="fa fa-fw fa-plus"></i>
                            Add Faq</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/faq/show') }}">
                            <i class="fa fa-fw fa-eye"></i>
                            View Faq</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/faq/show') }}">
                            <i class="fa fa-fw fa-trash"></i>
                            Delete Faq</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-cog fa-spin"></i>
                    <span class="nav-link-text">Settings</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="{{ url('auth/profile') }}">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('auth/profile') }}">
                            <i class="fa fa-fw fa-lock"></i>

                            <span class="nav-link-text">Change Password</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-dedent"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('img/admin/admin.jpg') }}" class="img-avatar">
                    <span>{{ App\Admin::all()->first()->full_name }}</span></a>
                <div class="dropdown-menu">
                    <!--<a class="dropdown-item" href="#"><i class="fa fa-fw fa-cog"></i>Settings</a>-->
                    <a class="dropdown-item" href="{{ url('auth/profile') }}"><i class="fa fa-fw fa-user"></i>Edit Profile</a>
                    <a class="dropdown-item" href="{{ url('auth/profile') }}"><i class="fa fa-fw fa-lock"></i>Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('auth/logout') }}" class="dropdown-item" >
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">




@yield('content')




    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; <a href="http://bdsoftech.com/" class="">BDSOFTECH</a> 2018</small>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard/js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('dashboard/js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/sb-admin-charts.min.js') }}"></script>
</div>
</body>

</html>
