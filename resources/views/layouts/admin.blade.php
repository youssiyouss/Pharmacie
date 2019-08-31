<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gestionnaire de Pharmacie</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/pt.png">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/modernizr-3.6.0.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.bundle.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->

</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <!-- <div class="brand-logo"><a href="index.html"><b><img src="../assets/images/logo.png" alt=""> </b><span class="brand-title"><img src="../../assets/images/logo-text.png" alt=""></span></a> -->
                <div class="brand-logo"><a href="{{ url('/') }}"><b><img src="../assets/images/pt.png" alt=""> </b><span class="brand-title"><i><strong style="color :#b7e778;">Pharma</strong><strong style="color : #9068be;">Tlem</strong></i></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href="url{{'/search'}}"><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="/search" method="get">
                                            <div class="input-group">
                                                <input type="search" name="search" class="form-control" placeholder="Recherche">
                                                <div class="input-group-append">
                                                  <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">

                    <div class="col p-0">

                      </div>
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><img class="m-r-10 img-responsive w-40px" src="{{ asset('storage/'.Auth::user()->photo) }}"></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>

                                        <li><span>{{ Auth::user()->login}} </span></li>
                                        <li><a href="{{ url('pharmaciens/'.Auth::user()->id)}}"><i class="mdi mdi-account f-s-20"></i> <span>Mon profile</span></a>
                                        </li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="icon-power"></i> <span>Logout</span>
                                            </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                          </form>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ url('/home') }}"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Page principale</span></a>
                    </li>
                    @can('isAdmin',Auth::user())
                    <li><a href="{{ url('pharmaciens') }}"><i class="mdi mdi-map"></i> <span class="nav-text">Utilisateurs</span></a>
                    </li>
                    @endcan
                    <li><a href="{{ url('fournisseurs') }}"><i class="mdi mdi-email"></i> <span class="nav-text">Fournisseurs</span></a>
                    </li>
                    <li><a href="{{ url('medicaments') }}"><i class="mdi mdi-table-edit"></i> <span class="nav-text">Medicaments</span></a>
                    </li>
                    <li><a href="{{ url('lot') }}"><i class="mdi mdi-widgets"></i> <span class="nav-text">Lots</span></a>
                    </li>
                    <li><a href="{{ url('achat') }}"><i class="mdi mdi-diamond"></i> <span class="nav-text">Achats</span></a>
                    </li>
                    <li><a href="{{ url('vente') }}"><i class="mdi mdi-nfc-variant"></i> <span class="nav-text">Ventes</span></a>
                    </li>
                    <li><a href="{{ url('alerte') }}"><i class="mdi mdi-calendar-check"></i> <span class="nav-text">Alerts</span>@if(auth()->user()->unreadNotifications->count() > 0)
                            <span class="badge badge-danger rounded-circle"> {{ auth()->user()->unreadNotifications->count() }} </span>@endif</a>
                    </li>
                    <li><a href="#"><i class="mdi mdi-chart-bar"></i> <span class="nav-text">Statistiques</span></a>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        <!-- content body -->
        <div class="content-body">
         @yield('content')
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
        <!-- footer -->
        <div class="footer">

        </div>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../js/custom.min.js"></script>
    <!-- Chartjs chart -->
    <script src="../../assets/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Custom dashboard script -->
    <script src="../js/dashboard-1.js"></script>
</body>

</html>
