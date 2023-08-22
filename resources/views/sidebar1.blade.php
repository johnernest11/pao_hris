


<!doctype html>
<html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/logo.png')}}" />

        <!-- TITLE -->
        <title>PAO – Admin</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet" />
        

        <!--- FONT-ICONS CSS -->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />

    </head>

    <body class="app sidebar-mini ltr light-mode">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->
        <!-- app-Header -->
        <div class="app-header header sticky">
          <div class="container-fluid main-container">
              <div class="d-flex align-items-center">
                  <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
                  <div class="responsive-logo">
                      <a href="#" class="header-logo">
                          <img src="{{asset('assets/images/brand/pao.png')}}" class="mobile-logo logo-1" alt="logo">
                          <img src="{{asset('assets/images/brand/logo.png')}}" class="mobile-logo dark-logo-1" alt="logo">
                      </a>
                  </div>
                  <!-- sidebar-toggle-->
                  <a class="logo-horizontal " href="#">
                      {{-- <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo"> --}}
                      <img src="{{asset('assets/images/brand/pao.png')}}" class="header-brand-img light-logo1"
                          alt="logo">
                  </a>
                  <!-- LOGO -->
                  
                  <div class="d-flex order-lg-2 ms-auto header-right-icons">
                      <!-- SEARCH -->
                      <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                          </button>
                      <div class="navbar navbar-collapse responsive-navbar p-0">
                          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                              <div class="d-flex order-lg-2">
                                  <div class="dropdown d-block d-lg-none">
                                      <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
                                          <i class="fe fe-search"></i>
                                      </a>
                                      <div class="dropdown-menu header-search dropdown-menu-start">
                                          <div class="input-group w-100 p-2">
                                              <input type="text" class="form-control" placeholder="Search....">
                                              <div class="input-group-text btn btn-primary">
                                                  <i class="fa fa-search" aria-hidden="true"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="dropdown d-md-flex">
                                      <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                          <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                          <span class="light-layout"><i class="fe fe-sun"></i></span>
                                      </a>
                                  </div>
                                  <!-- Theme-Layout -->
                                  <div class="dropdown d-md-flex">
                                      <a class="nav-link icon full-screen-link nav-link-bg">
                                          <i class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                      </a>
                                  </div>
                                  <div class="dropdown d-md-flex profile-1">
                                      <a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">
                                          <span>
                                                  <img src="assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                              </span>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                          <div class="drop-heading">
                                              <div class="text-center">
                                                  <h5 class="text-dark mb-0">{{$data->name}}</h5>
                                                  <h5 class="text-dark mb-0">{{$data->email}}</h5>
                                                  <small class="text-muted">Administrator</small>
                                              </div>
                                          </div>
                                          <div class="dropdown-divider m-0"></div>
                                          {{-- <a class="dropdown-item" href="#">
                                              <i class="dropdown-icon fe fe-user"></i> Profile
                                          </a>
                                          <a class="dropdown-item" href="#">
                                              <i class="dropdown-icon fe fe-mail"></i> Inbox
                                              <span class="badge bg-secondary float-end">3</span>
                                          </a>
                                          <a class="dropdown-item" href="#">
                                              <i class="dropdown-icon fe fe-settings"></i> Settings
                                          </a>
                                          <a class="dropdown-item" href="#">
                                              <i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
                                          </a> --}}
                                          <a class="dropdown-item" href="logout">
                                              <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                          </a>
                                      </div>
                                  </div>
                                  <!-- SIDE-MENU -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /app-Header -->

      <!--APP-SIDEBAR-->
      <div class="sticky">
          <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
          <aside class="app-sidebar">
              <div class="side-header">
                  <a class="header-brand1" href="index.html">
                      <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                      <img src="assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                      <img src="assets/images/brand/logo.png" class="header-brand-img light-logo" alt="logo">
                      <img src="assets/images/brand/pao.png" class="header-brand-img light-logo1" alt="logo">
                  </a>
                  <!-- LOGO -->
              </div>
              <div class="main-sidemenu">
                  <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                      </svg></div>
                  <ul class="side-menu">
                      <li class="sub-category">
                          <h3>Main</h3>
                      </li>
                      <li class="slide">
                          <a class="side-menu__item" data-bs-toggle="slide" href="dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                      </li>
                     
                      <li class="sub-category">
                          <h3>Elements</h3>
                      </li>
                      {{-- <li class="slide">
                          <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Personnel</span><i class="angle fa fa-angle-right"></i></a>
                          <ul class="slide-menu">
                              <li class="side-menu-label1"><a href="javascript:void(0)">Components</a></li>
                              <li><a href="../Individual-Record" class="slide-item"> Individual Records</a></li>
                              <li><a href="../employee-record" class="slide-item"> List of Personnel</a></li>
                          </ul>
                      </li> --}}
                      <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="employee"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Personal Data Sheet</span></a>
                      </li>
                      <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="Individual-Record"><i class="side-menu__icon fe fe-book"></i><span class="side-menu__label">Individual Records</span></a>
                      </li>
                      <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Administrative Actions</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Administrative Actions</a></li>
                            <li><a href="Lawyer-profile" class="slide-item"> Lawyers</a></li>
                            <li class="sub-slide">
                                <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Promotion</span><i class="sub-angle fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu">
                                    <li><a href="Lawyer" class="sub-slide-item">Lawyers</a></li>
                                    <li><a href="Staff" class="sub-slide-item">Staff</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                  </ul>
              </div>
          </aside>
      </div>
      <!--/APP-SIDEBAR-->

        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>
        <!-- SPARKLINE JS-->
        <script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

        <!-- CHARTJS CHART JS-->
        <script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- PIETY CHART JS-->
        <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

        <!-- INTERNAL Data tables js-->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

        <!-- ECHART JS-->
        <script src="{{asset('assets/plugins/echarts/echarts.js')}}"></script>

        <!-- SIDE-MENU JS-->
        <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{asset('assets/js/sticky.js')}}"></script>
        <script src="{{asset('assets/js/modal.js')}}"></script>

        <!-- SIDEBAR JS -->
        <script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
        <script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

        <!-- APEXCHART JS -->
        <script src="{{asset('assets/js/apexcharts.js')}}"></script>

        <!-- INDEX JS -->
        <script src="{{asset('assets/js/index1.js')}}"></script>

        <!-- Color Theme js -->
        <script src="{{asset('assets/js/themeColors.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/custom.js')}}"></script>

        <!-- DATA TABLE JS-->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/js/table-data.js')}}"></script>

        <script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}  "></script>


        

    </body>

</html>