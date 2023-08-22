{{-- @include('sidebar1') --}}



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
        <link id="style" href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

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
                      <a href="index.html" class="header-logo">
                          <img src="{{asset('assets/images/brand/pao.png')}}" class="mobile-logo logo-1" alt="logo">
                          <img src="{{asset('assets/images/brand/logo.png')}}" class="mobile-logo dark-logo-1" alt="logo">
                      </a>
                  </div>
                  <!-- sidebar-toggle-->
                  <a class="logo-horizontal " href="index.html">
                      <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
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
                                                  <img src="../assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
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
                      <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                      <img src="../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                      <img src="../assets/images/brand/logo.png" class="header-brand-img light-logo" alt="logo">
                      <img src="../assets/images/brand/pao.png" class="header-brand-img light-logo1" alt="logo">
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
                          <a class="side-menu__item" data-bs-toggle="slide" href="../dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
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
                        <a class="side-menu__item" data-bs-toggle="slide" href="../employee"><i class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Personal Data Sheet</span></a>
                      </li>
                      <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="../Individual-Record"><i class="side-menu__icon fe fe-book"></i><span class="side-menu__label">Individual Records</span></a>
                      </li>
                      <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Administrative Actions</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Administrative Actions</a></li>
                            <li><a href="../Lawyer-profile" class="slide-item"> Lawyers</a></li>
                            <li class="sub-slide">
                                <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Promotion</span><i class="sub-angle fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu">
                                    <li><a href="../Lawyer" class="sub-slide-item">Lawyers</a></li>
                                    <li><a href="../Staff" class="sub-slide-item">Staff</a></li>
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
<style>
    input[type="text"]
    {
        font-size:13px;
    }
      </style>
<div class="page">
    <div class="page-main">
        <div class="main-content app-content mt-0">
            <div class="side-app">
      
              <!-- CONTAINER -->
              <div class="main-container container-fluid">
<br>
<br>
<div class="row">
    

    <div class="col-sm-12">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">
            <li class="nav-item">
              <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#C1">C1</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#C2">C2</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#C3">C3</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#C4">C4</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Children">Add Children</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Education">Add Education</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Eligibility">Add Eligibility</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-WorkExperience">Add WorkExperience</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Voluntary">Add Voluntary</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Training">Add Trainings</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Add-Other">Add OtherInfo</button>
            </li>

            {{-- <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#C4">Files</button>
            </li> --}}
          </ul>

        <div class="tab-content pt-2">
            <div class="tab-pane fade show active C1" id="C1">
              <!-- PDS C1 -->
                    <div class="">
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <div class="form-row">
                                        <label class="col-form-label col-md-9 col-sm-1 "> <h6>CS Form No. 212</h6></label>
                                        <label class="col-form-label col-md-3 col-sm-1  " style="text-align:right; color:red;"><b>Updated at {{$result->updated_at}}</b></label>
                                        <div class="clearfix"></div>
                                        <small>Revised 2017</small>
                                        </div>
                                    </div>
                                    <div class="x_title">
                                        <h1><center><b>PERSONAL DATA SHEET</b></center></h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_title">
                                        
                                        <meduim><b>WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</b></meduim><hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-12 col-sm-12 ">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</label>
                                            <form  method="post" class="form-horizontal" action="{{route('update-excel1')}}"  enctype="multipart/form-data" required>
                                                @csrf
                                            <div class="col-md-12 col-sm-12 ">
                                                <form>
                                                <input type="file" class="form-control" name="import_file"   required>
                                                <input type="hidden"  style=""class="form-control" id="validationCustom01" name="Id" value="{{$result->Id}}" >
                                                <input type="hidden"  style=""class="form-control" id="validationCustom01" name="slug" value="{{$result->slug}}" >
                                                <button class="btn btn-primary" type="submit"  >Update PDS</button>
                                                </form>
                                            </div>
                                            </form>
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-7 col-sm-7 ">Print legibly. Tick appropriate boxes (     ) and use separate sheet if necessary. Indicate N/A if not applicable.  DO NOT ABBREVIATE.</label>
                                            <label class="col-form-label col-md-1 col-sm-1 ">1. CS ID No.</label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" placeholder=" (Do not fill up. For CSC use only)" name="CsId" value="{{$result->CsId}}"disabled >
                                                
                                            </div>
                                        </div>
                                        <meduim></meduim><hr>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_title">
                                        <h6><b>I. PERSONAL INFORMATION</b></h6>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <div class="form-row">
                                        
                                            <label class="col-form-label col-md-1 col-sm-1 ">2. SURNAME</label>
                                            <div class="col-md-11 col-sm-11 ">
                                                <input type="text" class="form-control" name="SureName" value="{{$result->SureName}}"disabled >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">FIRSTNAME  </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" name="FirstName" value="{{$result->FirstName}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>NAME EXTENSION(JR.,SR) </small></label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="ExtensionName" value="{{$result->ExtensionName}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">MIDDLENAME  </label>
                                            <div class="col-md-11 col-sm-11 ">
                                                <input type="text" class="form-control" name="MiddleName" value="{{$result->MiddleName}}"disabled > 
                                            </div>
                                        </div>
                                        <hr>    
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>3. DATE OF BIRTH (mm/dd/yyyy)</small></label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="DateBirth" value="{{$result->DateBirth}}"disabled > 
                                            </div>
                                            <label class="col-form-label col-md-3 col-sm-3 ">16.CITIZENSHIP</label>
                                            <div class="col-md-3 col-sm-3 ">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" <?php if ($result->Citizenship == 1) echo "checked='checked'"; ?> disabled > Filipino</input>&emsp;&emsp;
                                                            <input type="checkbox" <?php if ($result->CitizenshipDual == 1) echo "checked='checked'"; ?>disabled> Dual Citizenship</input>
                                                            <br>
                                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" <?php if ($result->CitizenshipByBirth == 1) echo "checked='checked'"; ?>disabled> by birth</input>&emsp;&emsp;
                                                            <input type="checkbox" <?php if ($result->CitizenshipByNaturalization == 1) echo "checked='checked'"; ?>disabled> by naturalization</input>
                                                        </label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>4. PLACE OF BIRTH </small> </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="PlaceBirth" value="{{$result->PlaceBirth}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-3 col-sm-3 ">If holder of  dual citizenship, </label>
                                            <div class="col-md-32 col-sm-32 ">
                                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<label>Pls. indicate country:</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">5. SEX  </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="Sex" value="{{$result->Sex}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-3 col-sm-3 ">please indicate the details.</label>
                                            <div class="col-md-4 col-sm-4 ">
                                            <select class="select2_single form-control" tabindex="-1" disabled>
                                                        <option></option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">6. CIVIL STATUS  </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="CivilStatus" value="{{$result->CivilStatus}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>17. RESIDENTIAL ADDRESS</small> </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressLot" value="{{$result->ResAddressLot}}"disabled>
                                                <label  >House/Block/Lot No.</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressStreet" value="{{$result->ResAddressStreet}}"disabled>
                                                <label >Street.</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "></label>
                                            <div class="col-md-4 col-sm-4 ">
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "> </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressVillage" value="{{$result->ResAddressVillage}}"disabled>
                                                <label  >Subdivision/Village</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressBarangay" value="{{$result->ResAddressBarangay}}"disabled>
                                                <label >Barangay</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">7. HEIGHT (m) </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="Height" value="{{$result->Height}}"disabled >
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "></label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressCity" value="{{$result->ResAddressCity}}"disabled>
                                                <label  >City/Municipality</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ResAddressProvince" value="{{$result->ResAddressProvince}}"disabled>
                                                <label >Province</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">8. WEIGHT (kg) </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="Weight" value="{{$result->Weight}}"disabled >
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center>ZIP CODE</center></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name=" ResAddressZipCode" value="{{$result->ResAddressZipCode}}"disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">9 . BLOOD TYPE  </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="BloodType" value="{{$result->BloodType}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 ">18. PERMANENT ADDRESS </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressLot" value="{{$result->PerAddressLot}}"disabled>
                                                <label  >House/Block/Lot No.</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressStreet" value="{{$result->PerAddressStreet}}"disabled>
                                                <label >Street.</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">10. GSIS ID NO.</label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="GsisNo" value="{{$result->GsisNo}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "> </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressVillage" value="{{$result->PerAddressVillage}}"disabled>
                                                <label  >Subdivision/Village</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressBarangay" value="{{$result->PerAddressBarangay}}"disabled>
                                                <label >Barangay</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">11. PAG-IBIG ID NO.</label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="PagibigNo" value="{{$result->PagibigNo}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "></label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressCity" value="{{$result->PerAddressCity}}"disabled>
                                                <label  >City/Municipality</label>
                                            </div>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="PerAddressProvince" value="{{$result->PerAddressProvince}}"disabled>
                                                <label >Province</label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">12. PHILHEALTH NO. </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="PhilhealthNo" value="{{$result->PhilhealthNo}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center>ZIP CODE</center></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="PerAddressZipCode" value="{{$result->PerAddressZipCode}}"disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">13. SSS NO.. </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="SssNo" value="{{$result->SssNo}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center><small>19. TELEPHONE NO.</small></center></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="TelephoneNo" value="{{$result->TelephoneNo}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">14. TIN NO.. </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="TinNo" value="{{$result->TinNo}}" disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center>20. MOBILE NO.</center></label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="MobileNo" value="{{$result->MobileNo}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">15. AGENCY EMPLOYEE NO. </label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="AgencyEmpNo" value="  {{$result->AgencyEmpNo}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 ">21. E-MAIL ADDRESS&emsp;&emsp;&emsp;&emsp;&emsp;(if any)</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" name="EmailAddress" value="{{$result->EmailAddress}}" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="x_title">
                                        <h6><b>II.  FAMILY BACKGROUND</b></h6>
                                        <div class="clearfix"></div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">16. SPOUSE'S SURNAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseSureName" value="   {{$result->family_background[0]->FatherSurname}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-4 col-sm-4 ">23. NAME of CHILDREN  (Write full name and list all) </label>
                                            <label class="col-form-label col-md-2 col-sm-2 ">DATE OF BIRTH (mm/dd/yyyy)  </label>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">FIRST NAME </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="SpouseFirstName" value="  {{$result->family_background[0]->SpouseFirstName}}"disabled >
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" placeholder="NAME EXTENSION(JR.,SR)" name="SpouseExtendName" value="{{$result->family_background[0]->SpouseExtendName}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName" value="{{$result->family_background[0]->ChildName}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth" value="{{$result->family_background[0]->ChildBirth}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">MIDDLE NAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseMiddleName" value="{{$result->family_background[0]->SpouseMiddleName}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName1" value="{{$result->family_background[0]->ChildName1}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth1" value="{{$result->family_background[0]->ChildBirth1}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">OCCUPATION </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseOccupation" value="{{$result->family_background[0]->SpouseOccupation}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName2" value="{{$result->family_background[0]->ChildName2}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth2" value="{{$result->family_background[0]->ChildBirth2}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>EMPLOYER/ &emsp;BUSINESS</small> </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseEmployer" value="{{$result->family_background[0]->SpouseEmployer}}"disabled>
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName3" value="{{$result->family_background[0]->ChildName3}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth3" value="{{$result->family_background[0]->ChildBirth3}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>BUSINESS ADDRESS</small> </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseBussinesAdd" value="{{$result->family_background[0]->SpouseBussinesAdd}}"disabled>
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName4" value="{{$result->family_background[0]->ChildName4}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth4" value="{{$result->family_background[0]->ChildBirth4}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>TELEPHONE NO.</small> </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="SpouseTelNo" value="{{$result->family_background[0]->SpouseTelNo}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName5" value="{{$result->family_background[0]->ChildName5}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth5" value="{{$result->family_background[0]->ChildBirth5}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">24. <small>FATHER'S SURNAME</small> </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="FatherSurname"  value="{{$result->family_background[0]->FatherSurname}}" disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName6" value="{{$result->family_background[0]->ChildName6}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth6" value="{{$result->family_background[0]->ChildBirth6}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">FIRST NAME </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="FatherFirstName" value="{{$result->family_background[0]->FatherFirstName}}"disabled >
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" placeholder="NAME EXTENSION(JR.,SR)" name="FatherExtendName" value="{{$result->family_background[0]->FatherExtendName}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName7" value="{{$result->family_background[0]->ChildName7}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth7" value="{{$result->family_background[0]->ChildBirth7}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">MIDDLE NAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="FatherMiddleName" value="{{$result->family_background[0]->FatherMiddleName}}"disabled >
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName8" value="{{$result->family_background[0]->ChildName8}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth8" value="{{$result->family_background[0]->ChildBirth8}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">25. MOTHER'S MAIDEN NAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName9" value="{{$result->family_background[0]->ChildName9}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth9" value="{{$result->family_background[0]->ChildBirth9}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">SURNAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                            <input type="text" class="form-control"  name="MotherSurname" value="{{$result->family_background[0]->MotherSurname}}"disabled>
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName10" value="{{$result->family_background[0]->ChildName10}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth10" value="{{$result->family_background[0]->ChildBirth10}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">FIRST NAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="MotherFirstName" value="{{$result->family_background[0]->MotherFirstName}}"disabled>
                                            </div>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"  name="ChildName11" value="{{$result->family_background[0]->ChildName11}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control"  name="ChildBirth11" value="{{$result->family_background[0]->ChildBirth11}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">MIDDLE NAME </label>
                                            <div class="col-md-5 col-sm-5 ">
                                                <input type="text" class="form-control" name="MotherMiddleName" value="{{$result->family_background[0]->MotherMiddleName}}"disabled>
                                            </div>
                                            <label class="col-form-label col-md-6 col-sm-6 " style="color:red;"> <center>(Continue on separate sheet if necessary)</center></label>
                                        </div>
                                        <hr>
                                        <div class="x_title">
                                        <h6><b>III.  EDUCATIONAL BACKGROUND</b></h6>
                                        <div class="clearfix"></div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">26. LEVEL </label>
                                            <label class="col-form-label col-md-3 col-sm-3 ">NAME OF SCHOOL (Write in full)  </label>
                                            <label class="col-form-label col-md-2 col-sm-2 "><center>BASIC EDUCATION/DEGREE/COURSE &emsp;(Write in full)</center></label>
                                            <label class="col-form-label col-md-2 col-sm-2 "><center>PERIOD OF ATTENDANCE  &emsp; &emsp; &emsp; &emsp;From &emsp; &emsp; &emsp; &emsp;  To</center></label>
                                            <label class="col-form-label col-md-2 col-sm-2 "><center>HIGHEST LEVEL/UNITS EARNED &emsp;(if not graduated)</center></label>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center>YEAR GRADUATED</center></label>
                                            <label class="col-form-label col-md-1 col-sm-1 "><center><small>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</small></center></label>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">ELEMENTARY</label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="ElemSchool" value="{{$result->education_background[0]->ElemSchool}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="ElemDegree" value="{{$result->education_background[0]->ElemDegree}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="ElemFrom" value="{{$result->education_background[0]->ElemFrom}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="ElemTo" value="{{$result->education_background[0]->ElemTo}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                            <input type="text" class="form-control" name="ElemEarned" value="{{$result->education_background[0]->ElemEarned}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="ElemYearGrad" value="{{$result->education_background[0]->ElemYearGrad}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                            <input type="text" class="form-control" name="ElemHonor" value="{{$result->education_background[0]->ElemHonor}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">SECONDARY</label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="SecondSchool" value="{{$result->education_background[0]->SecondSchool}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="SecondDegree" value="{{$result->education_background[0]->SecondDegree}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="SecondFrom" value="{{$result->education_background[0]->SecondFrom}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="SecondTo" value="{{$result->education_background[0]->SecondTo}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                            <input type="text" class="form-control" name="SecondEarned" value="{{$result->education_background[0]->SecondEarned}}"disabled >
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="SecondYearGrad" value="{{$result->education_background[0]->SecondYearGrad}}"disabled > 
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                            <input type="text" class="form-control" name="SecondHonor" value="{{$result->education_background[0]->SecondHonor}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 "><small>VOCATIONAL/TRADE COURSE</small></label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="VocationSchool" value="{{$result->education_background[0]->VocationSchool}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="VocationDegree" value="{{$result->education_background[0]->VocationDegree}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="VocationFrom" value="{{$result->education_background[0]->VocationFrom}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="VocationTo" value="{{$result->education_background[0]->VocationTo}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                            <input type="text" class="form-control" name="VocationEarned" value="{{$result->education_background[0]->VocationEarned}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="VocationYearGrad" value="{{$result->education_background[0]->VocationYearGrad}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                            <input type="text" class="form-control" name="VocationHonor" value="{{$result->education_background[0]->VocationHonor}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">COLLEGE</label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="CollegeSchool" value="{{$result->education_background[0]->CollegeSchool}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="CollegeDegree" value="{{$result->education_background[0]->CollegeDegree}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="CollegeFrom" value="{{$result->education_background[0]->CollegeFrom}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="CollegeTo" value="{{$result->education_background[0]->CollegeTo}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                            <input type="text" class="form-control" name="CollegeEarned" value="{{$result->education_background[0]->CollegeEarned}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="CollegeYearGrad" value="{{$result->education_background[0]->CollegeYearGrad}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                            <input type="text" class="form-control" name="CollegeHonor" value="{{$result->education_background[0]->CollegeHonor}}"disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">GRADUATE STUDIES </label>
                                            <div class="col-md-3 col-sm-3 ">
                                                <input type="text" class="form-control" name="GraduateSchool" value="{{$result->education_background[0]->GraduateSchool}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="GraduateDegree" value="{{$result->education_background[0]->GraduateDegree}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="GraduateFrom" value="{{$result->education_background[0]->GraduateFrom}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="GraduateTo" value="{{$result->education_background[0]->GraduateTo}}"disabled>
                                            </div>
                                            <div class="col-md-2 col-sm-2 ">
                                            <input type="text" class="form-control" name="GraduateEarned" value="{{$result->education_background[0]->GraduateEarned}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="GraduateYearGrad" value="{{$result->education_background[0]->GraduateYearGrad}}"disabled>
                                            </div>
                                            <div class="col-md-1 col-sm-1 ">
                                            <input type="text" class="form-control" name="GraduateHonor" value="{{$result->education_background[0]->GraduateHonor}}"disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                        </div>
                                        <div class="form-row">
                                            <label class="col-form-label col-md-1 col-sm-1 ">SIGNATURE</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                            <label class="col-form-label col-md-1 col-sm-1 ">DATE</label>
                                            <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control"value=""disabled>
                                            </div>
                                        
                                        </div>

                                        <!-- <div class="ln_solid"></div>
                                        <div class="form-row">
                                            <div class="col-md-9 col-sm-9  offset-md-3">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div> -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- PDS C1 -->
            </div>

            <div class="tab-pane fade C2 pt-3" id="C2">
              <!-- PDS C2 -->
                <div class="">
                        <div class="clearfix">
                        </div>
                        <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                        <h6><b>IV.  CIVIL SERVICE ELIGIBILITY</b></h6>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br />
                                            <form class="form-label-left input_mask">
                                            <div class="form-row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">27. CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE </label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">RATING(If Applicable)  </label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">DATE OF EXAMINATION / CONFERMENT</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">PLACE OF EXAMINATION / CONFERMENT</label>
                                                <label class="col-form-label col-md-3 col-sm-3 "><center>LICENSE (if applicable)</center></label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">BARANGAY ELIGIBILITY / DRIVER'S LICENSE </label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "><center>NUMBER</center></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "><center>Date of Validity</center></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName" value="{{$result->civil_eligibility[0]->EligibilityName}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->civil_eligibility[0]->EligibilityRating}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate" value="{{$result->civil_eligibility[0]->EligibilityDate}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace" value="{{$result->civil_eligibility[0]->EligibilityPlace}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo" value="{{$result->civil_eligibility[0]->EligibilityNo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid" value="{{$result->civil_eligibility[0]->EligibilityValid}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName1" value="{{$result->civil_eligibility[0]->EligibilityName1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating1" value="{{$result->civil_eligibility[0]->EligibilityRating1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate1" value="{{$result->civil_eligibility[0]->EligibilityDate1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace1" value="{{$result->civil_eligibility[0]->EligibilityPlace1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo1" value="{{$result->civil_eligibility[0]->EligibilityNo1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid1" value="{{$result->civil_eligibility[0]->EligibilityValid1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName2" value="{{$result->civil_eligibility[0]->EligibilityName2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating2" value="{{$result->civil_eligibility[0]->EligibilityRating2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate2" value="{{$result->civil_eligibility[0]->EligibilityDate2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace2" value="{{$result->civil_eligibility[0]->EligibilityPlace2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo2" value="{{$result->civil_eligibility[0]->EligibilityNo2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid2" value="{{$result->civil_eligibility[0]->EligibilityValid2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName3" value="{{$result->civil_eligibility[0]->EligibilityName3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating3" value="{{$result->civil_eligibility[0]->EligibilityRating3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate3" value="{{$result->civil_eligibility[0]->EligibilityDate3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace3" value="{{$result->civil_eligibility[0]->EligibilityPlace3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo3" value="{{$result->civil_eligibility[0]->EligibilityNo3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid3" value="{{$result->civil_eligibility[0]->EligibilityValid3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName4" value="{{$result->civil_eligibility[0]->EligibilityName4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating4" value="{{$result->civil_eligibility[0]->EligibilityRating4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate4" value="{{$result->civil_eligibility[0]->EligibilityDate4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace4" value="{{$result->civil_eligibility[0]->EligibilityPlace4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo4" value="{{$result->civil_eligibility[0]->EligibilityNo4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid4" value="{{$result->civil_eligibility[0]->EligibilityValid4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName5" value="{{$result->civil_eligibility[0]->EligibilityName5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating5" value="{{$result->civil_eligibility[0]->EligibilityRating5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate5" value="{{$result->civil_eligibility[0]->EligibilityDate5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace5" value="{{$result->civil_eligibility[0]->EligibilityPlace5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo5" value="{{$result->civil_eligibility[0]->EligibilityNo5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid5" value="{{$result->civil_eligibility[0]->EligibilityValid5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityName6" value="{{$result->civil_eligibility[0]->EligibilityName6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityRating6" value="{{$result->civil_eligibility[0]->EligibilityRating6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityDate6" value="{{$result->civil_eligibility[0]->EligibilityDate6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="EligibilityPlace6" value="{{$result->civil_eligibility[0]->EligibilityPlace6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="EligibilityNo6" value="{{$result->civil_eligibility[0]->EligibilityNo6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityValid6" value="{{$result->civil_eligibility[0]->EligibilityValid6}}"disabled>
                                                </div>
                                            </div>
                                            
                                           
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                            </div>
                                            <hr>
                                            <div class="x_title">
                                                <h6><b>V.  WORK EXPERIENCE </b></h6>
                                                <label>(Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</label>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-2 col-sm-2 ">28. INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">POSITION TITLE   &emsp;(Write in full/Do not abbreviate)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">DEPARTMENT / AGENCY / OFFICE / COMPANY</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">MONTHLY SALARY</label>
                                                <label class="col-form-label col-md-1 col-sm-1 "><center>SALARY/ JOB/ PAY GRADE </center></label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">STATUS OF APPOINTMENT</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">GOV'T SERVICE(Y/ N)</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">(Write in full/Do not abbreviate)</label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom" value="{{$result->work_experience[0]->WorkFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo" value="{{$result->work_experience[0]->WorkTo}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition" value="{{$result->work_experience[0]->WorkPosition}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency0" value="{{$result->work_experience[0]->WorkAgency0}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary" value="{{$result->work_experience[0]->WorkSalary}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade" value="{{$result->work_experience[0]->WorkGrade}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus" value="{{$result->work_experience[0]->WorkStatus}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov" value="{{$result->work_experience[0]->WorkGov}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom1" value="{{$result->work_experience[0]->WorkFrom1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo1" value="{{$result->work_experience[0]->WorkTo1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition1" value="{{$result->work_experience[0]->WorkPosition1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency1" value="{{$result->work_experience[0]->WorkAgency1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary1" value="{{$result->work_experience[0]->WorkSalary1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade1" value="{{$result->work_experience[0]->WorkGrade1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus1" value="{{$result->work_experience[0]->WorkStatus1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov1" value="{{$result->work_experience[0]->WorkGov1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom2" value="{{$result->work_experience[0]->WorkFrom2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo2" value="{{$result->work_experience[0]->WorkTo2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition2" value="{{$result->work_experience[0]->WorkPosition2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency2" value="{{$result->work_experience[0]->WorkAgency2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary2" value="{{$result->work_experience[0]->WorkSalary2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade2" value="{{$result->work_experience[0]->WorkGrade2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus2" value="{{$result->work_experience[0]->WorkStatus2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov2" value="{{$result->work_experience[0]->WorkGov2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom3" value="{{$result->work_experience[0]->WorkFrom3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo3" value="{{$result->work_experience[0]->WorkTo3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition3" value="{{$result->work_experience[0]->WorkPosition3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency3" value="{{$result->work_experience[0]->WorkAgency3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary3" value="{{$result->work_experience[0]->WorkSalary3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade3" value="{{$result->work_experience[0]->WorkGrade3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus3" value="{{$result->work_experience[0]->WorkStatus3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov3" value="{{$result->work_experience[0]->WorkGov3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom4" value="{{$result->work_experience[0]->WorkFrom4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo4" value="{{$result->work_experience[0]->WorkTo4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition4" value="{{$result->work_experience[0]->WorkPosition4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency4" value="{{$result->work_experience[0]->WorkAgency4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary4" value="{{$result->work_experience[0]->WorkSalary4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade4" value="{{$result->work_experience[0]->WorkGrade4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus4" value="{{$result->work_experience[0]->WorkStatus4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov4" value="{{$result->work_experience[0]->WorkGov4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom5" value="{{$result->work_experience[0]->WorkFrom5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo5" value="{{$result->work_experience[0]->WorkTo5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition5" value="{{$result->work_experience[0]->WorkPosition5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency5" value="{{$result->work_experience[0]->WorkAgency5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary5" value="{{$result->work_experience[0]->WorkSalary5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade5" value="{{$result->work_experience[0]->WorkGrade5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus5" value="{{$result->work_experience[0]->WorkStatus5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov5" value="{{$result->work_experience[0]->WorkGov5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom6" value="{{$result->work_experience[0]->WorkFrom6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo6" value="{{$result->work_experience[0]->WorkTo6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition6" value="{{$result->work_experience[0]->WorkPosition6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency6" value="{{$result->work_experience[0]->WorkAgency6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary6" value="{{$result->work_experience[0]->WorkSalary6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade6" value="{{$result->work_experience[0]->WorkGrade6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus6" value="{{$result->work_experience[0]->WorkStatus6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov6" value="{{$result->work_experience[0]->WorkGov6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom7" value="{{$result->work_experience[0]->WorkFrom7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo7" value="{{$result->work_experience[0]->WorkTo7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition7" value="{{$result->work_experience[0]->WorkPosition7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency7" value="{{$result->work_experience[0]->WorkAgency7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary7" value="{{$result->work_experience[0]->WorkSalary7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade7" value="{{$result->work_experience[0]->WorkGrade7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus7" value="{{$result->work_experience[0]->WorkStatus7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov7" value="{{$result->work_experience[0]->WorkGov7}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom8" value="{{$result->work_experience[0]->WorkFrom8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo8" value="{{$result->work_experience[0]->WorkTo8}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition8" value="{{$result->work_experience[0]->WorkPosition8}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency8" value="{{$result->work_experience[0]->WorkAgency8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary8" value="{{$result->work_experience[0]->WorkSalary8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade8" value="{{$result->work_experience[0]->WorkGrade8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus8" value="{{$result->work_experience[0]->WorkStatus8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov8" value="{{$result->work_experience[0]->WorkGov8}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom9" value="{{$result->work_experience1[0]->WorkFrom9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo9" value="{{$result->work_experience1[0]->WorkTo9}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition9" value="{{$result->work_experience1[0]->WorkPosition9}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency9" value="{{$result->work_experience1[0]->WorkAgency9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary9" value="{{$result->work_experience1[0]->WorkSalary9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade9" value="{{$result->work_experience1[0]->WorkGrade9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus9" value="{{$result->work_experience1[0]->WorkStatus9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov9" value="{{$result->work_experience1[0]->WorkGov9}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom10" value="{{$result->work_experience1[0]->WorkFrom10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo10" value="{{$result->work_experience1[0]->WorkTo10}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition10" value="{{$result->work_experience1[0]->WorkPosition10}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency10" value="{{$result->work_experience1[0]->WorkAgency10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary10" value="{{$result->work_experience1[0]->WorkSalary10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade10" value="{{$result->work_experience1[0]->WorkGrade10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus10" value="{{$result->work_experience1[0]->WorkStatus10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov10" value="{{$result->work_experience1[0]->WorkGov10}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom11" value="{{$result->work_experience1[0]->WorkFrom11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo11" value="{{$result->work_experience1[0]->WorkTo11}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition11" value="{{$result->work_experience1[0]->WorkPosition11}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency11" value="{{$result->work_experience1[0]->WorkAgency11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary11" value="{{$result->work_experience1[0]->WorkSalary11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade11" value="{{$result->work_experience1[0]->WorkGrade11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus11" value="{{$result->work_experience1[0]->WorkStatus11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov11" value="{{$result->work_experience1[0]->WorkGov11}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom12" value="{{$result->work_experience1[0]->WorkFrom12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo12" value="{{$result->work_experience1[0]->WorkTo12}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition12" value="{{$result->work_experience1[0]->WorkPosition12}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency12" value="{{$result->work_experience1[0]->WorkAgency12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary12" value="{{$result->work_experience1[0]->WorkSalary12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade12" value="{{$result->work_experience1[0]->WorkGrade12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus12" value="{{$result->work_experience1[0]->WorkStatus12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov12" value="{{$result->work_experience1[0]->WorkGov12}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom13" value="{{$result->work_experience1[0]->WorkFrom13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo13" value="{{$result->work_experience1[0]->WorkTo13}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition13" value="{{$result->work_experience1[0]->WorkPosition13}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency13" value="{{$result->work_experience1[0]->WorkAgency13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary13" value="{{$result->work_experience1[0]->WorkSalary13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade13" value="{{$result->work_experience1[0]->WorkGrade13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus13" value="{{$result->work_experience1[0]->WorkStatus13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov13" value="{{$result->work_experience1[0]->WorkGov13}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom14" value="{{$result->work_experience1[0]->WorkFrom14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo14" value="{{$result->work_experience1[0]->WorkTo14}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition14" value="{{$result->work_experience1[0]->WorkPosition14}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency14" value="{{$result->work_experience1[0]->WorkAgency14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary14" value="{{$result->work_experience1[0]->WorkSalary14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade14" value="{{$result->work_experience1[0]->WorkGrade14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus14" value="{{$result->work_experience1[0]->WorkStatus14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov14" value="{{$result->work_experience1[0]->WorkGov14}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom15" value="{{$result->work_experience1[0]->WorkFrom15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo15" value="{{$result->work_experience1[0]->WorkTo15}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition15" value="{{$result->work_experience1[0]->WorkPosition15}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency15" value="{{$result->work_experience1[0]->WorkAgency15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary15" value="{{$result->work_experience1[0]->WorkSalary15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade15" value="{{$result->work_experience1[0]->WorkGrade15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus15" value="{{$result->work_experience1[0]->WorkStatus15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov15" value="{{$result->work_experience1[0]->WorkGov15}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom16" value="{{$result->work_experience1[0]->WorkFrom16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo16" value="{{$result->work_experience1[0]->WorkTo16}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition16" value="{{$result->work_experience1[0]->WorkPosition16}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency160" value="{{$result->work_experience1[0]->WorkAgency16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary16" value="{{$result->work_experience1[0]->WorkSalary16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade16" value="{{$result->work_experience1[0]->WorkGrade16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus16" value="{{$result->work_experience1[0]->WorkStatus16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov16" value="{{$result->work_experience1[0]->WorkGov16}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom17" value="{{$result->work_experience1[0]->WorkFrom17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo17" value="{{$result->work_experience1[0]->WorkTo17}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition17" value="{{$result->work_experience1[0]->WorkPosition17}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency17" value="{{$result->work_experience1[0]->WorkAgency17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary17" value="{{$result->work_experience1[0]->WorkSalary17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade17" value="{{$result->work_experience1[0]->WorkGrade17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus17" value="{{$result->work_experience1[0]->WorkStatus17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov17" value="{{$result->work_experience1[0]->WorkGov17}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom18" value="{{$result->work_experience2[0]->WorkFrom18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo18" value="{{$result->work_experience2[0]->WorkTo18}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition18" value="{{$result->work_experience2[0]->WorkPosition18}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency18" value="{{$result->work_experience2[0]->WorkAgency18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary18" value="{{$result->work_experience2[0]->WorkSalary18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade18" value="{{$result->work_experience2[0]->WorkGrade18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus18" value="{{$result->work_experience2[0]->WorkStatus18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov18" value="{{$result->work_experience2[0]->WorkGov18}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom19" value="{{$result->work_experience2[0]->WorkFrom19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo19" value="{{$result->work_experience2[0]->WorkTo19}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition19" value="{{$result->work_experience2[0]->WorkPosition19}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency19" value="{{$result->work_experience2[0]->WorkAgency19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary19" value="{{$result->work_experience2[0]->WorkSalary19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade19" value="{{$result->work_experience2[0]->WorkGrade19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus19" value="{{$result->work_experience2[0]->WorkStatus19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov19" value="{{$result->work_experience2[0]->WorkGov19}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom20" value="{{$result->work_experience2[0]->WorkFrom20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo20" value="{{$result->work_experience2[0]->WorkTo20}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition20" value="{{$result->work_experience2[0]->WorkPosition20}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency20" value="{{$result->work_experience2[0]->WorkAgency20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary20" value="{{$result->work_experience2[0]->WorkSalary20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade20" value="{{$result->work_experience2[0]->WorkGrade20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus20" value="{{$result->work_experience2[0]->WorkStatus20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov20" value="{{$result->work_experience2[0]->WorkGov20}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom21" value="{{$result->work_experience2[0]->WorkFrom21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo21" value="{{$result->work_experience2[0]->WorkTo21}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition21" value="{{$result->work_experience2[0]->WorkPosition21}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency21" value="{{$result->work_experience2[0]->WorkAgency21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary21" value="{{$result->work_experience2[0]->WorkSalary21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade21" value="{{$result->work_experience2[0]->WorkGrade21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus21" value="{{$result->work_experience2[0]->WorkStatus21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov21" value="{{$result->work_experience2[0]->WorkGov21}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom22" value="{{$result->work_experience2[0]->WorkFrom22}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo22" value="{{$result->work_experience2[0]->WorkTo22}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition22" value="{{$result->work_experience2[0]->WorkPosition22}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency22" value="{{$result->work_experience2[0]->WorkAgency22}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary22" value="{{$result->work_experience2[0]->WorkSalary22}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade22" value="{{$result->work_experience2[0]->WorkGrade22}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus22" value="{{$result->work_experience2[0]->WorkStatus22}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov22" value="{{$result->work_experience2[0]->WorkGov22}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom23" value="{{$result->work_experience2[0]->WorkFrom23}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo23" value="{{$result->work_experience2[0]->WorkTo23}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition23" value="{{$result->work_experience2[0]->WorkPosition23}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency23" value="{{$result->work_experience2[0]->WorkAgency23}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary23" value="{{$result->work_experience2[0]->WorkSalary23}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade23" value="{{$result->work_experience2[0]->WorkGrade23}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus23" value="{{$result->work_experience2[0]->WorkStatus23}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov23" value="{{$result->work_experience2[0]->WorkGov23}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom24" value="{{$result->work_experience2[0]->WorkFrom24}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo24" value="{{$result->work_experience2[0]->WorkTo24}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition24" value="{{$result->work_experience2[0]->WorkPosition24}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency24" value="{{$result->work_experience2[0]->WorkAgency24}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary24" value="{{$result->work_experience2[0]->WorkSalary24}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade24" value="{{$result->work_experience2[0]->WorkGrade24}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus24" value="{{$result->work_experience2[0]->WorkStatus24}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov24" value="{{$result->work_experience2[0]->WorkGov24}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom25" value="{{$result->work_experience2[0]->WorkFrom25}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo25" value="{{$result->work_experience2[0]->WorkTo25}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition25" value="{{$result->work_experience2[0]->WorkPosition25}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency25" value="{{$result->work_experience2[0]->WorkAgency25}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary25" value="{{$result->WorkSalary25}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade25" value="{{$result->work_experience2[0]->WorkGrade25}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus25" value="{{$result->work_experience2[0]->WorkStatus25}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov25" value="{{$result->work_experience2[0]->WorkGov25}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom26" value="{{$result->work_experience2[0]->WorkFrom26}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo26" value="{{$result->work_experience2[0]->WorkTo26}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition26" value="{{$result->work_experience2[0]->WorkPosition26}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency26" value="{{$result->work_experience2[0]->WorkAgency26}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary26" value="{{$result->work_experience2[0]->WorkSalary26}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade26" value="{{$result->work_experience2[0]->WorkGrade26}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus26" value="{{$result->work_experience2[0]->WorkStatus26}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov26" value="{{$result->work_experience2[0]->WorkGov26}}"disabled>
                                                </div>
                                            </div>

                                            
                                            <div class="form-row">
                                                <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">SIGNATURE</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col-form-label col-md-1 col-sm-1 ">DATE</label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control"value=""disabled>
                                                </div>
                                            </div>
                                            <!-- <div class="ln_solid"></div>
                                            <div class="form-row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div> -->

        
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>

            <div class="tab-pane fade pt-3" id="C3">
              <!-- PDS C3 -->
                <div class="">
                        <div class="clearfix">
                        </div>
                    <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_title">
                                        <h6><b>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</b></h6>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br />
                                            <form class="form-label-left input_mask">
                                            <div class="form-row">
                                                <label class="col-form-label col-md-5 col-sm-5 ">29. NAME & ADDRESS OF ORGANIZATION  (Write in full) </label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">NUMBER OF HOURS</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">POSITION / NATURE OF WORK</label>
                                                <label class="col-form-label col-md-5 col-sm-5 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                <label class="col-form-label col-md-3 col-sm-3 "></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName" value="{{$result->organization[0]->OrganizationName}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom" value="{{$result->organization[0]->OrganizationFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo" value="{{$result->organization[0]->OrganizationTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours" value="{{$result->organization[0]->OrganizationHours}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition" value="{{$result->organization[0]->OrganizationPosition}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName1" value="{{$result->organization[0]->OrganizationName1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom1" value="{{$result->organization[0]->OrganizationFrom1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo1" value="{{$result->organization[0]->OrganizationTo1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours1" value="{{$result->organization[0]->OrganizationHours1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition1" value="{{$result->organization[0]->OrganizationPosition1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName2" value="{{$result->organization[0]->OrganizationName2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom2" value="{{$result->organization[0]->OrganizationFrom2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo2" value="{{$result->organization[0]->OrganizationTo2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours2" value="{{$result->organization[0]->OrganizationHours2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition2" value="{{$result->organization[0]->OrganizationPosition2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName3" value="{{$result->organization[0]->OrganizationName3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom3" value="{{$result->organization[0]->OrganizationFrom3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo3" value="{{$result->organization[0]->OrganizationTo3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours3" value="{{$result->organization[0]->OrganizationHours3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition3" value="{{$result->organization[0]->OrganizationPosition3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName4" value="{{$result->organization[0]->OrganizationName4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom4" value="{{$result->organization[0]->OrganizationFrom4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo4" value="{{$result->organization[0]->OrganizationTo4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours4" value="{{$result->organization[0]->OrganizationHours4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition4" value="{{$result->organization[0]->OrganizationPosition4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName5" value="{{$result->organization[0]->OrganizationName5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom5" value="{{$result->organization[0]->OrganizationFrom5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo5" value="{{$result->organization[0]->OrganizationTo5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours5" value="{{$result->organization[0]->OrganizationHours5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition5" value="{{$result->organization[0]->OrganizationPosition5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="OrganizationName6" value="{{$result->organization[0]->OrganizationName6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationFrom6" value="{{$result->organization[0]->OrganizationFrom6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="OrganizationTo6" value="{{$result->organization[0]->OrganizationTo6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="OrganizationHours6" value="{{$result->organization[0]->OrganizationHours6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="OrganizationPosition6" value="{{$result->organization[0]->OrganizationPosition6}}"disabled>
                                                </div>
                                            </div>
                                            
                                            <hr>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                            </div>
                                            <hr>
                                            <div class="x_title">
                                            <h6><b>VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-5 col-sm-5 ">30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS (Write in full) </label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">NUMBER OF HOURS</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">Type of LD </label>
                                                <label class="col-form-label col-md-2 col-sm-2 "> CONDUCTED/ SPONSORED BY (Write in full)</label>
                                                <label class="col-form-label col-md-5 col-sm-5 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text"  class="form-control" name="TrainingTitle" value="{{$result->training[0]->TrainingTitle}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom" value="{{$result->training[0]->TrainingFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo" value="{{$result->training[0]->TrainingTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours"value="{{$result->training[0]->TrainingHours}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType" value="{{$result->training[0]->TrainingType}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct" value="{{$result->training[0]->TrainingConduct}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle1" value="{{$result->training[0]->TrainingTitle1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom1" value="{{$result->training[0]->TrainingFrom1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo1" value="{{$result->training[0]->TrainingTo1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours1"value="{{$result->training[0]->TrainingHours1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType1" value="{{$result->training[0]->TrainingType1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct1" value="{{$result->training[0]->TrainingConduct1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle2" value="{{$result->training[0]->TrainingTitle2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom2" value="{{$result->training[0]->TrainingFrom2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo2" value="{{$result->training[0]->TrainingTo2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours2"value="{{$result->training[0]->TrainingHours2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType2" value="{{$result->training[0]->TrainingType2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct2" value="{{$result->training[0]->TrainingConduct2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle3" value="{{$result->training[0]->TrainingTitle3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom3" value="{{$result->training[0]->TrainingFrom3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo3" value="{{$result->training[0]->TrainingTo3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours3"value="{{$result->training[0]->TrainingHours3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType3" value="{{$result->training[0]->TrainingType3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct3" value="{{$result->training[0]->TrainingConduct3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle4" value="{{$result->training[0]->TrainingTitle4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom4" value="{{$result->training[0]->TrainingFrom4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo4" value="{{$result->training[0]->TrainingTo4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours4"value="{{$result->training[0]->TrainingHours4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType4" value="{{$result->training[0]->TrainingType4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct4" value="{{$result->training[0]->TrainingConduct4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle5" value="{{$result->training[0]->TrainingTitle5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom5" value="{{$result->training[0]->TrainingFrom5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo5" value="{{$result->training[0]->TrainingTo5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours5"value="{{$result->training[0]->TrainingHours5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType5" value="{{$result->training[0]->TrainingType5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct5" value="{{$result->training[0]->TrainingConduct5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle6" value="{{$result->training[0]->TrainingTitle6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom6" value="{{$result->training[0]->TrainingFrom6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo6" value="{{$result->training[0]->TrainingTo6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours6"value="{{$result->training[0]->TrainingHours6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType6" value="{{$result->training[0]->TrainingType6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct6" value="{{$result->training[0]->TrainingConduct6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle7" value="{{$result->training[0]->TrainingTitle7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom7" value="{{$result->training[0]->TrainingFrom7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo7" value="{{$result->training[0]->TrainingTo7}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours7"value="{{$result->training[0]->TrainingHours7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType7" value="{{$result->training[0]->TrainingType7}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct7" value="{{$result->training[0]->TrainingConduct7}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle9" value="{{$result->training[0]->TrainingTitle9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom9" value="{{$result->training[0]->TrainingFrom9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo9" value="{{$result->training[0]->TrainingTo9}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours9"value="{{$result->training[0]->TrainingHours9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType9" value="{{$result->training[0]->TrainingType9}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct9" value="{{$result->training[0]->TrainingConduct9}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle10" value="{{$result->training[0]->TrainingTitle10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom10" value="{{$result->training[0]->TrainingFrom10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo10" value="{{$result->training[0]->TrainingTo10}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours10"value="{{$result->training[0]->TrainingHours10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType10" value="{{$result->training[0]->TrainingType10}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct10" value="{{$result->training[0]->TrainingConduct10}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle11" value="{{$result->training1[0]->TrainingTitle11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom11" value="{{$result->training1[0]->TrainingFrom11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo11" value="{{$result->training1[0]->TrainingTo11}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours11"value="{{$result->training1[0]->TrainingHours11}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType11" value="{{$result->training1[0]->TrainingType11}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct11" value="{{$result->training1[0]->TrainingConduct11}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle12" value="{{$result->training1[0]->TrainingTitle12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom12" value="{{$result->training1[0]->TrainingFrom12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo12" value="{{$result->training1[0]->TrainingTo12}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours12"value="{{$result->training1[0]->TrainingHours12}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType12" value="{{$result->training1[0]->TrainingType12}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct12" value="{{$result->training1[0]->TrainingConduct12}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle13" value="{{$result->training1[0]->TrainingTitle13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom13" value="{{$result->training1[0]->TrainingFrom13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo13" value="{{$result->training1[0]->TrainingTo13}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours13"value="{{$result->training1[0]->TrainingHours13}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType13" value="{{$result->training1[0]->TrainingType13}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct13" value="{{$result->training1[0]->TrainingConduct13}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle14" value="{{$result->training1[0]->TrainingTitle14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom14" value="{{$result->training1[0]->TrainingFrom14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo14" value="{{$result->training1[0]->TrainingTo14}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours14"value="{{$result->training1[0]->TrainingHours14}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType14" value="{{$result->training1[0]->TrainingType14}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct14" value="{{$result->training1[0]->TrainingConduct14}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle15" value="{{$result->training1[0]->TrainingTitle15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom15" value="{{$result->training1[0]->TrainingFrom15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo15" value="{{$result->training1[0]->TrainingTo15}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours15"value="{{$result->training1[0]->TrainingHours15}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType15" value="{{$result->training1[0]->TrainingType15}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct15" value="{{$result->training1[0]->TrainingConduct15}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle16" value="{{$result->training1[0]->TrainingTitle16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom16" value="{{$result->training1[0]->TrainingFrom16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo16" value="{{$result->training1[0]->TrainingTo16}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours16"value="{{$result->training1[0]->TrainingHours16}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType16" value="{{$result->training1[0]->TrainingType16}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct16" value="{{$result->training1[0]->TrainingConduct16}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle17" value="{{$result->training1[0]->TrainingTitle17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom17" value="{{$result->training1[0]->TrainingFrom17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo17" value="{{$result->training1[0]->TrainingTo17}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours17"value="{{$result->training1[0]->TrainingHours17}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType17" value="{{$result->training1[0]->TrainingType17}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct17" value="{{$result->training1[0]->TrainingConduct17}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle18" value="{{$result->training1[0]->TrainingTitle18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom18" value="{{$result->training1[0]->TrainingFrom18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo18" value="{{$result->training1[0]->TrainingTo18}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours18"value="{{$result->training1[0]->TrainingHours18}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType18" value="{{$result->training1[0]->TrainingType18}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct18" value="{{$result->training1[0]->TrainingConduct18}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle19" value="{{$result->training1[0]->TrainingTitle19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom19" value="{{$result->training1[0]->TrainingFrom19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo19" value="{{$result->training1[0]->TrainingTo19}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours19"value="{{$result->training1[0]->TrainingHours19}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType19" value="{{$result->training1[0]->TrainingType19}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct19" value="{{$result->training1[0]->TrainingConduct19}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle20" value="{{$result->training1[0]->TrainingTitle20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom20" value="{{$result->training1[0]->TrainingFrom20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo20" value="{{$result->training1[0]->TrainingTo20}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours20"value="{{$result->training1[0]->TrainingHours20}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType20" value="{{$result->training1[0]->TrainingType20}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct20" value="{{$result->training1[0]->TrainingConduct20}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle21" value="{{$result->training1[0]->TrainingTitle21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom21" value="{{$result->training1[0]->TrainingFrom21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo21" value="{{$result->training1[0]->TrainingTo21}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours21"value="{{$result->training1[0]->TrainingHours21}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType21" value="{{$result->training1[0]->TrainingType21}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct21" value="{{$result->training1[0]->TrainingConduct21}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                            </div>
                                            <hr>
                                            <div class="x_title">
                                            <h6><b>VIII.  OTHER INFORMATION</b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">31. SPECIAL SKILLS and HOBBIES </label>
                                                <label class="col-form-label col-md-6 col-sm-6 ">32. NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION(Write in full)</label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill" value="{{$result->information[0]->InfoSkill}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition" value="{{$result->information[0]->InfoRecognition}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization" value="{{$result->information[0]->InfoOrganization}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill1" value="{{$result->information[0]->InfoSkill1}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition1" value="{{$result->information[0]->InfoRecognition1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization1" value="{{$result->information[0]->InfoOrganization1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill3" value="{{$result->information[0]->InfoSkill3}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition3" value="{{$result->information[0]->InfoRecognition3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization3" value="{{$result->information[0]->InfoOrganization3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill4" value="{{$result->information[0]->InfoSkill4}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition4" value="{{$result->information[0]->InfoRecognition4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization4" value="{{$result->information[0]->InfoOrganization4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill5" value="{{$result->information[0]->InfoSkill5}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition5" value="{{$result->information[0]->InfoRecognition5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization5" value="{{$result->information[0]->InfoOrganization5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill6" value="{{$result->information[0]->InfoSkill6}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition6" value="{{$result->information[0]->InfoRecognition6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization6" value="{{$result->information[0]->InfoOrganization6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill7" value="{{$result->information[0]->InfoSkill7}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition7" value="{{$result->information[0]->InfoRecognition7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization7" value="{{$result->information[0]->InfoOrganization7}}"disabled>
                                                </div>
                                            </div>
                                            
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-12 col-sm-12 " style="color:red;"><center>(Continue on separate sheet if necessary)</label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">SIGNATURE</label>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col-form-label col-md-1 col-sm-1 ">DATE</label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control"value=""disabled>
                                                </div>
                                            </div>
                                            <!-- <div class="ln_solid"></div>
                                            <div class="form-row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div> -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade pt-3" id="C4">
                  <!-- PDS C4 -->
                    <div class="">
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <br />
                                            <form class="form-label-left input_mask">
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">34.Are you related by consanguinity or affinity to the appointing or recommending authority, or to the</label>
                                                <label class="col-form-label col-md-4 col-sm-4 "></label>
                                                <label class="col-form-label col-md-8 col-sm-8 ">chief of bureau or office or to the person who has immediate supervision over you in the Office,</label>
                                                <label class="col-form-label col-md-4 col-sm-4 "></label>
                                                <label class="col-form-label col-md-8 col-sm-8 ">Bureau or Department where you will be apppointed,</label>
                                                <label class="col-form-label col-md-4 col-sm-4 "></label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">a. within the third degree? </label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                            <input type="checkbox" <?php if ($result->question[0]->a34Yes == 1) echo "checked='checked'"; ?> disabled > YES</input>&emsp;&emsp;
                                                            <input type="checkbox" <?php if ($result->question[0]->a34No == 1) echo "checked='checked'"; ?> disabled > NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">b. within the fourth degree (for Local Government Unit - Career Employees)? </label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                            <input type="checkbox" <?php if ($result->question[0]->b34No == 1) echo "checked='checked'"; ?> disabled > YES</input>&emsp;&emsp;
                                                            <input type="checkbox"<?php if ($result->question[0]->b34No == 1) echo "checked='checked'"; ?> disabled > NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->b34Details}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">35. a. Have you ever been found guilty of any administrative offense? </label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                            <input type="checkbox" <?php if ($result->question[0]->a35Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                            <input type="checkbox" <?php if ($result->question[0]->a35No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a35Details}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">b. Have you been criminally charged before any court?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->b35Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->b35No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    Date Filed:  <input type="text" class="form-control" value="{{$result->question[0]->b35Date}}"disabled>
                                                    Status of Case/s:<input type="text" class="form-control" value="{{$result->question[0]->b35Status}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                            <input type="checkbox" <?php if ($result->question[0]->a36Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                            <input type="checkbox" <?php if ($result->question[0]->a36No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a36Details}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">37. Have you ever been separated from the service in any of the following modes:
                                                     resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->a37Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->a37No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a37Details}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">38. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->a38Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->a38No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->a38Details}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">38. b. Have you resigned from the government service during the three
                                                     (3)-month period before the last election to promote/actively campaign for a national or local candidate?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->b38Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->b38No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 "> If YES, give details:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a38Details}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">39. Have you acquired the status of an immigrant or permanent resident of another country?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->a39Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->a39No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-4 col-sm-4 ">If YES, give details (country): </label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a39Details}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">40. Pursuant to: (a) Indigenous People's Act (RA 8371); 
                                                    (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">a.Are you a member of any indigenous group?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->a40Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->a40No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">If YES, please specify:</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->a40Details}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">b.Are you a person with disability?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->b40Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->b40No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">If YES, please specify:</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->b40Details}}"disabled>
                                                </div>
                                            </div><div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 ">c.Are you a solo parent?</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" <?php if ($result->question[0]->c40Yes == 1) echo "checked='checked'"; ?> disabled> YES</input>&emsp;&emsp;
                                                        <input type="checkbox" <?php if ($result->question[0]->c40No == 1) echo "checked='checked'"; ?> disabled> NO</input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-8 col-sm-8 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">If YES, please specify:</label>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" value="{{$result->question[0]->c40Details}}"disabled>
                                                </div>
                                            </div>
                                            <div class="x_title">
                                                <h6><b>41.REFERENCES<p style="color:red;"> (Person not related by consanguinity or affinity to applicant /appointee)</p></b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">NAME</label>
                                                <label class="col-form-label col-md-4 col-sm-4 ">ADDRESS</label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">TEL. NO.</label>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="ReferenceName1" value="{{$result->references[0]->ReferenceName1}}"disabled>
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" name="ReferenceAddress1" value="{{$result->references[0]->ReferenceAddress1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="ReferenceTel1" value="{{$result->references[0]->ReferenceTel1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="ReferenceName2" value="{{$result->references[0]->ReferenceName2}}"disabled>
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" name="ReferenceAddress2" value="{{$result->references[0]->ReferenceAddress2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="ReferenceTel2" value="{{$result->references[0]->ReferenceTel2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="ReferenceName3" value="{{$result->references[0]->ReferenceName3}}"disabled>
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                    <input type="text" class="form-control" name="ReferenceAddress3" value="{{$result->references[0]->ReferenceAddress3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="ReferenceTel3" value="{{$result->references[0]->ReferenceTel3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-9 col-sm-9 ">42. I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, 
                                                    correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. 
                                                    I authorize the agency head/authorized representative to verify/validate the contents stated herein.         
                                                     I  agree that any misrepresentation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-4 col-sm-4 ">Government Issued ID (i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)
                                                    PLEASE INDICATE ID Number and Date of Issuance</label>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">Government Issued ID: </label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="GovernmentId" value="{{$result->references[0]->GovernmentId}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">ID/License/
                                                    Passport No.:  </label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="GovernmentNo" value="{{$result->references[0]->GovernmentNo}}"disabled>
                                                </div>
                                                <!-- <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control">
                                                    <label><center>Signature (Sign inside the box)</center></label>
                                                </div> -->
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">Date/Place of Issuance:  </label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="GovernmentDate" value="{{$result->references[0]->GovernmentDate}}"disabled>
                                                </div>
                                            </div>
                                            <div class="x_title">
                                                <h6><b>SUBSCRIBED AND SWORN to before me this_____________________________________________________, affiant exhibiting his/her validly issued government ID as indicated above.</b></h6>
                                                <div class="clearfix"></div>
                                            </div>

                                            <!-- <div class="ln_solid"></div>
                                            <div class="form-row">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div> -->

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <!-- PDS C4 -->
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Children">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                          <div class="x_title">
                                          <h6><b>III.  ADD CHILDREN</b></h6>
                                              <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                              <br />
                                              <form class="form-label-left input_mask">
                                              <div class="form-row">
                                                  <label class="col-form-label col-md-6 col-sm-6 "></label>
                                                  <label class="col-form-label col-md-4 col-sm-4 ">23. NAME of CHILDREN  (Write full name and list all) </label>
                                                  <label class="col-form-label col-md-1 col-sm-2 ">DATE OF BIRTH (mm/dd/yyyy)  </label>
                                              </div>
                                              <hr>
                                              <div class="form-row">
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth1}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth2}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth3}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth4}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth5}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth6}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName7}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth7}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName8}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth8}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName9}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth9}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName10}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth10}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm- ">
                                                </div>
                                                <div class="col-md-4 col-sm-4 ">
                                                <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_children[0]->AddChildName11}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_children[0]->AddChildBirth11}}"disabled>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Education">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <h6><b>III.  EDUCATIONAL BACKGROUND</b></h6>
                                            <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">26. LEVEL </label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">NAME OF SCHOOL (Write in full)  </label>
                                                <label class="col-form-label col-md-2 col-sm-2 "><center>BASIC EDUCATION/DEGREE/COURSE &emsp;(Write in full)</center></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "><center>PERIOD OF ATTENDANCE  &emsp; &emsp; &emsp; &emsp;From &emsp; &emsp; &emsp; &emsp;  To</center></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "><center>HIGHEST LEVEL/UNITS EARNED &emsp;(if not graduated)</center></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "><center>YEAR GRADUATED</center></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "><center><small>SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</small></center></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">ELEMENTARY</label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="ElemSchool" value="{{$result->add_education_background[0]->AddElemSchool}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="ElemDegree" value="{{$result->add_education_background[0]->AddElemDegree}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="ElemFrom" value="{{$result->add_education_background[0]->AddElemFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="ElemTo" value="{{$result->add_education_background[0]->AddElemTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="ElemEarned" value="{{$result->add_education_background[0]->AddElemEarned}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="ElemYearGrad" value="{{$result->add_education_background[0]->AddElemYearGrad}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="ElemHonor" value="{{$result->add_education_background[0]->AddElemHonor}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">SECONDARY</label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="SecondSchool" value="{{$result->add_education_background[0]->AddSecondSchool}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="SecondDegree" value="{{$result->add_education_background[0]->AddSecondDegree}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="SecondFrom" value="{{$result->add_education_background[0]->AddSecondFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="SecondTo" value="{{$result->add_education_background[0]->AddSecondTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="SecondEarned" value="{{$result->add_education_background[0]->AddSecondEarned}}"disabled >
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="SecondYearGrad" value="{{$result->add_education_background[0]->AddSecondYearGrad}}"disabled > 
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="SecondHonor" value="{{$result->add_education_background[0]->AddSecondHonor}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 "><small>VOCATIONAL/TRADE COURSE</small></label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="VocationSchool" value="{{$result->add_education_background[0]->AddVocationSchool}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="VocationDegree" value="{{$result->add_education_background[0]->AddVocationDegree}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="VocationFrom" value="{{$result->add_education_background[0]->AddVocationFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="VocationTo" value="{{$result->add_education_background[0]->AddVocationTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="VocationEarned" value="{{$result->add_education_background[0]->AddVocationEarned}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="VocationYearGrad" value="{{$result->add_education_background[0]->AddVocationYearGrad}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="VocationHonor" value="{{$result->add_education_background[0]->AddVocationHonor}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">COLLEGE</label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="CollegeSchool" value="{{$result->add_education_background[0]->AddCollegeSchool}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="CollegeDegree" value="{{$result->add_education_background[0]->AddCollegeDegree}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="CollegeFrom" value="{{$result->add_education_background[0]->AddCollegeFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="CollegeTo" value="{{$result->add_education_background[0]->AddCollegeTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="CollegeEarned" value="{{$result->add_education_background[0]->AddCollegeEarned}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="CollegeYearGrad" value="{{$result->add_education_background[0]->AddCollegeYearGrad}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="CollegeHonor" value="{{$result->add_education_background[0]->AddCollegeHonor}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-1 col-sm-1 ">GRADUATE STUDIES </label>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="GraduateSchool" value="{{$result->add_education_background[0]->AddGraduateSchool}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="GraduateDegree" value="{{$result->add_education_background[0]->AddGraduateDegree}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="GraduateFrom" value="{{$result->add_education_background[0]->AddGraduateFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="GraduateTo" value="{{$result->add_education_background[0]->AddGraduateTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                <input type="text" class="form-control" name="GraduateEarned" value="{{$result->add_education_background[0]->AddGraduateEarned}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="GraduateYearGrad" value="{{$result->add_education_background[0]->AddGraduateYearGrad}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="GraduateHonor" value="{{$result->add_education_background[0]->AddGraduateHonor}}"disabled>
                                                </div>
                                            </div>
                                            <hr>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Eligibility">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <h6><b>IV.  CIVIL SERVICE ELIGIBILITY</b></h6>
                                                <div class="clearfix"></div>
                                        </div>
                                            <div class="x_content">
                                                <br />
                                                <form class="form-label-left input_mask">
                                                <div class="form-row">
                                                    <label class="col-form-label col-md-3 col-sm-3 ">27. CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE </label>
                                                    <label class="col-form-label col-md-1 col-sm-1 ">RATING(If Applicable)  </label>
                                                    <label class="col-form-label col-md-2 col-sm-2 ">DATE OF EXAMINATION / CONFERMENT</label>
                                                    <label class="col-form-label col-md-3 col-sm-3 ">PLACE OF EXAMINATION / CONFERMENT</label>
                                                    <label class="col-form-label col-md-3 col-sm-3 "><center>LICENSE (if applicable)</center></label>
                                                    <label class="col-form-label col-md-3 col-sm-3 ">BARANGAY ELIGIBILITY / DRIVER'S LICENSE </label>
                                                    <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                    <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                    <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                    <label class="col-form-label col-md-1 col-sm-1 "><center>NUMBER</center></label>
                                                    <label class="col-form-label col-md-2 col-sm-2 "><center>Date of Validity</center></label>
                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName" value="{{$result->add_civileligibility[0]->AddEligibilityName}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating" value="{{$result->add_civileligibility[0]->AddEligibilityRating}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate" value="{{$result->add_civileligibility[0]->AddEligibilityDate}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace" value="{{$result->add_civileligibility[0]->AddEligibilityPlace}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo" value="{{$result->add_civileligibility[0]->AddEligibilityNo}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid" value="{{$result->add_civileligibility[0]->AddEligibilityValid}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName1" value="{{$result->add_civileligibility[0]->AddEligibilityName1}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating1" value="{{$result->add_civileligibility[0]->AddEligibilityRating1}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate1" value="{{$result->add_civileligibility[0]->AddEligibilityDate1}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace1" value="{{$result->add_civileligibility[0]->AddEligibilityPlace1}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo1" value="{{$result->add_civileligibility[0]->AddEligibilityNo1}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid1" value="{{$result->add_civileligibility[0]->AddEligibilityValid1}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName2" value="{{$result->add_civileligibility[0]->AddEligibilityName2}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating2" value="{{$result->add_civileligibility[0]->AddEligibilityRating2}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate2" value="{{$result->add_civileligibility[0]->AddEligibilityDate2}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace2" value="{{$result->add_civileligibility[0]->AddEligibilityPlace2}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo2" value="{{$result->add_civileligibility[0]->AddEligibilityNo2}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid2" value="{{$result->add_civileligibility[0]->AddEligibilityValid2}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName3" value="{{$result->add_civileligibility[0]->AddEligibilityName3}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating3" value="{{$result->add_civileligibility[0]->AddEligibilityRating3}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate3" value="{{$result->add_civileligibility[0]->AddEligibilityDate3}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace3" value="{{$result->add_civileligibility[0]->AddEligibilityPlace3}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo3" value="{{$result->add_civileligibility[0]->AddEligibilityNo3}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid3" value="{{$result->add_civileligibility[0]->AddEligibilityValid3}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName4" value="{{$result->add_civileligibility[0]->AddEligibilityName4}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating4" value="{{$result->add_civileligibility[0]->AddEligibilityRating4}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate4" value="{{$result->add_civileligibility[0]->AddEligibilityDate4}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace4" value="{{$result->add_civileligibility[0]->AddEligibilityPlace4}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo4" value="{{$result->add_civileligibility[0]->AddEligibilityNo4}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid4" value="{{$result->add_civileligibility[0]->AddEligibilityValid4}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName5" value="{{$result->add_civileligibility[0]->AddEligibilityName5}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating5" value="{{$result->add_civileligibility[0]->AddEligibilityRating5}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate5" value="{{$result->add_civileligibility[0]->AddEligibilityDate5}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace5" value="{{$result->add_civileligibility[0]->AddEligibilityPlace5}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo5" value="{{$result->add_civileligibility[0]->AddEligibilityNo5}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid5" value="{{$result->add_civileligibility[0]->AddEligibilityValid5}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityName6" value="{{$result->add_civileligibility[0]->AddEligibilityName6}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityRating6" value="{{$result->add_civileligibility[0]->AddEligibilityRating6}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityDate6" value="{{$result->add_civileligibility[0]->AddEligibilityDate6}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="EligibilityPlace6" value="{{$result->add_civileligibility[0]->AddEligibilityPlace6}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="EligibilityNo6" value="{{$result->add_civileligibility[0]->AddEligibilityNo6}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="EligibilityValid6" value="{{$result->add_civileligibility[0]->AddEligibilityValid6}}"disabled>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-WorkExperience">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <div class="x_title">
                                                <h6><b>V.  WORK EXPERIENCE </b></h6>
                                                <label>(Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</label>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-2 col-sm-2 ">28. INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">POSITION TITLE   &emsp;(Write in full/Do not abbreviate)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">DEPARTMENT / AGENCY / OFFICE / COMPANY</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">MONTHLY SALARY</label>
                                                <label class="col-form-label col-md-1 col-sm-1 "><center>SALARY/ JOB/ PAY GRADE </center></label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">STATUS OF APPOINTMENT</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">GOV'T SERVICE(Y/ N)</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">(Write in full/Do not abbreviate)</label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom" value="{{$result->add_workexperience4[0]->AddWorkFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo" value="{{$result->add_workexperience4[0]->AddWorkTo}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition" value="{{$result->add_workexperience4[0]->AddWorkPosition}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency0" value="{{$result->add_workexperience4[0]->AddWorkAgency0}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary" value="{{$result->add_workexperience4[0]->AddWorkSalary}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade" value="{{$result->add_workexperience4[0]->AddWorkGrade}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus" value="{{$result->add_workexperience4[0]->AddWorkStatus}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov" value="{{$result->add_workexperience4[0]->AddWorkGov}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom1" value="{{$result->add_workexperience4[0]->AddWorkFrom1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo1" value="{{$result->add_workexperience4[0]->AddWorkTo1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition1" value="{{$result->add_workexperience4[0]->AddWorkPosition1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency1" value="{{$result->add_workexperience4[0]->AddWorkAgency1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary1" value="{{$result->add_workexperience4[0]->AddWorkSalary1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade1" value="{{$result->add_workexperience4[0]->AddWorkGrade1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus1" value="{{$result->add_workexperience4[0]->AddWorkStatus1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov1" value="{{$result->add_workexperience4[0]->AddWorkGov1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom2" value="{{$result->add_workexperience4[0]->AddWorkFrom2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo2" value="{{$result->add_workexperience4[0]->AddWorkTo2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition2" value="{{$result->add_workexperience4[0]->AddWorkPosition2}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency2" value="{{$result->add_workexperience4[0]->AddWorkAgency2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary2" value="{{$result->add_workexperience4[0]->AddWorkSalary2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade2" value="{{$result->add_workexperience4[0]->AddWorkGrade2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus2" value="{{$result->add_workexperience4[0]->AddWorkStatus2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov2" value="{{$result->add_workexperience4[0]->AddWorkGov2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom3" value="{{$result->add_workexperience4[0]->AddWorkFrom3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo3" value="{{$result->add_workexperience4[0]->AddWorkTo3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition3" value="{{$result->add_workexperience4[0]->AddWorkPosition3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency3" value="{{$result->add_workexperience4[0]->AddWorkAgency3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary3" value="{{$result->add_workexperience4[0]->AddWorkSalary3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade3" value="{{$result->add_workexperience4[0]->AddWorkGrade3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus3" value="{{$result->add_workexperience4[0]->AddWorkStatus3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov3" value="{{$result->add_workexperience4[0]->AddWorkGov3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom4" value="{{$result->add_workexperience4[0]->AddWorkFrom4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo4" value="{{$result->add_workexperience4[0]->AddWorkTo4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition4" value="{{$result->add_workexperience4[0]->AddWorkPosition4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency4" value="{{$result->add_workexperience4[0]->AddWorkAgency4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary4" value="{{$result->add_workexperience4[0]->AddWorkSalary4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade4" value="{{$result->add_workexperience4[0]->AddWorkGrade4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus4" value="{{$result->add_workexperience4[0]->AddWorkStatus4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov4" value="{{$result->add_workexperience4[0]->AddWorkGov4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom5" value="{{$result->add_workexperience4[0]->AddWorkFrom5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo5" value="{{$result->add_workexperience4[0]->AddWorkTo5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition5" value="{{$result->add_workexperience4[0]->AddWorkPosition5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency5" value="{{$result->add_workexperience4[0]->AddWorkAgency5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary5" value="{{$result->add_workexperience4[0]->AddWorkSalary5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade5" value="{{$result->add_workexperience4[0]->AddWorkGrade5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus5" value="{{$result->add_workexperience4[0]->AddWorkStatus5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov5" value="{{$result->add_workexperience4[0]->AddWorkGov5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom6" value="{{$result->add_workexperience4[0]->AddWorkFrom6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo6" value="{{$result->add_workexperience4[0]->AddWorkTo6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition6" value="{{$result->add_workexperience4[0]->AddWorkPosition6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency6" value="{{$result->add_workexperience4[0]->AddWorkAgency6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary6" value="{{$result->add_workexperience4[0]->AddWorkSalary6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade6" value="{{$result->add_workexperience4[0]->AddWorkGrade6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus6" value="{{$result->add_workexperience4[0]->AddWorkStatus6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov6" value="{{$result->add_workexperience4[0]->AddWorkGov6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom7" value="{{$result->add_workexperience4[0]->AddWorkFrom7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo7" value="{{$result->add_workexperience4[0]->AddWorkTo7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition7" value="{{$result->add_workexperience4[0]->AddWorkPosition7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency7" value="{{$result->add_workexperience4[0]->AddWorkAgency7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary7" value="{{$result->add_workexperience4[0]->AddWorkSalary7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade7" value="{{$result->add_workexperience4[0]->AddWorkGrade7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus7" value="{{$result->add_workexperience4[0]->AddWorkStatus7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov7" value="{{$result->add_workexperience4[0]->AddWorkGov7}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkFrom8" value="{{$result->add_workexperience4[0]->AddWorkFrom8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkTo8" value="{{$result->add_workexperience4[0]->AddWorkTo8}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkPosition8" value="{{$result->add_workexperience4[0]->AddWorkPosition8}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="WorkAgency8" value="{{$result->add_workexperience4[0]->AddWorkAgency8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkSalary8" value="{{$result->add_workexperience4[0]->AddWorkSalary8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGrade8" value="{{$result->add_workexperience4[0]->AddWorkGrade8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                <input type="text" class="form-control" name="WorkStatus8" value="{{$result->add_workexperience4[0]->AddWorkStatus8}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="WorkGov8" value="{{$result->add_workexperience4[0]->AddWorkGov8}}"disabled>
                                                </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Voluntary">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <h6><b>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <br />
                                                <form class="form-label-left input_mask">
                                                <div class="form-row">
                                                    <label class="col-form-label col-md-5 col-sm-5 ">29. NAME & ADDRESS OF ORGANIZATION  (Write in full) </label>
                                                    <label class="col-form-label col-md-2 col-sm-2 ">INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                    <label class="col-form-label col-md-2 col-sm-2 ">NUMBER OF HOURS</label>
                                                    <label class="col-form-label col-md-3 col-sm-3 ">POSITION / NATURE OF WORK</label>
                                                    <label class="col-form-label col-md-5 col-sm-5 "></label>
                                                    <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                    <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                    <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                    <label class="col-form-label col-md-3 col-sm-3 "></label>
                                                </div>
                                                <hr>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName" value="{{$result->add_organization[0]->AddOrganizationName}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom" value="{{$result->add_organization[0]->AddOrganizationFrom}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo" value="{{$result->add_organization[0]->AddOrganizationTo}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours" value="{{$result->add_organization[0]->AddOrganizationHours}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition" value="{{$result->add_organization[0]->AddOrganizationPosition}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName1" value="{{$result->add_organization[0]->AddOrganizationName1}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom1" value="{{$result->add_organization[0]->AddOrganizationFrom1}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo1" value="{{$result->add_organization[0]->AddOrganizationTo1}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours1" value="{{$result->add_organization[0]->AddOrganizationHours1}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition1" value="{{$result->add_organization[0]->AddOrganizationPosition1}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName2" value="{{$result->add_organization[0]->AddOrganizationName2}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom2" value="{{$result->add_organization[0]->AddOrganizationFrom2}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo2" value="{{$result->add_organization[0]->AddOrganizationTo2}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours2" value="{{$result->add_organization[0]->AddOrganizationHours2}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition2" value="{{$result->add_organization[0]->AddOrganizationPosition2}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName3" value="{{$result->add_organization[0]->AddOrganizationName3}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom3" value="{{$result->add_organization[0]->AddOrganizationFrom3}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo3" value="{{$result->add_organization[0]->AddOrganizationTo3}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours3" value="{{$result->add_organization[0]->AddOrganizationHours3}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition3" value="{{$result->add_organization[0]->AddOrganizationPosition3}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName4" value="{{$result->add_organization[0]->AddOrganizationName4}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom4" value="{{$result->add_organization[0]->AddOrganizationFrom4}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo4" value="{{$result->add_organization[0]->AddOrganizationTo4}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours4" value="{{$result->add_organization[0]->AddOrganizationHours4}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition4" value="{{$result->add_organization[0]->AddOrganizationPosition4}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName5" value="{{$result->add_organization[0]->AddOrganizationName5}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom5" value="{{$result->add_organization[0]->AddOrganizationFrom5}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo5" value="{{$result->add_organization[0]->AddOrganizationTo5}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours5" value="{{$result->add_organization[0]->AddOrganizationHours5}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition5" value="{{$result->add_organization[0]->AddOrganizationPosition5}}"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-5 col-sm-5 ">
                                                        <input type="text" class="form-control" name="OrganizationName6" value="{{$result->add_organization[0]->AddOrganizationName6}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationFrom6" value="{{$result->add_organization[0]->AddOrganizationFrom6}}"disabled>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 ">
                                                        <input type="text" class="form-control" name="OrganizationTo6" value="{{$result->add_organization[0]->AddOrganizationTo6}}"disabled>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 ">
                                                        <input type="text" class="form-control" name="OrganizationHours6" value="{{$result->add_organization[0]->AddOrganizationHours6}}"disabled>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <input type="text" class="form-control" name="OrganizationPosition6" value="{{$result->add_organization[0]->AddOrganizationPosition6}}"disabled>
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Training">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <h6><b>VII.  LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-5 col-sm-5 ">30. TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS (Write in full) </label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">INCLUSIVE DATES (mm/dd/yyyy)</label>
                                                <label class="col-form-label col-md-2 col-sm-2 ">NUMBER OF HOURS</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">Type of LD </label>
                                                <label class="col-form-label col-md-2 col-sm-2 "> CONDUCTED/ SPONSORED BY (Write in full)</label>
                                                <label class="col-form-label col-md-5 col-sm-5 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">From</label>
                                                <label class="col-form-label col-md-1 col-sm-1 ">To</label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                                <label class="col-form-label col-md-1 col-sm-1 "></label>
                                                <label class="col-form-label col-md-2 col-sm-2 "></label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle" value="{{$result->add_training[0]->AddTrainingTitle}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom" value="{{$result->add_training[0]->AddTrainingFrom}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo" value="{{$result->add_training[0]->AddTrainingTo}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours"value="{{$result->add_training[0]->AddTrainingHours}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType" value="{{$result->add_training[0]->AddTrainingType}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct" value="{{$result->add_training[0]->AddTrainingConduct}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle1" value="{{$result->add_training[0]->AddTrainingTitle1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom1" value="{{$result->add_training[0]->AddTrainingFrom1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo1" value="{{$result->add_training[0]->AddTrainingTo1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours1"value="{{$result->add_training[0]->AddTrainingHours1}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType1" value="{{$result->add_training[0]->AddTrainingType1}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct1" value="{{$result->add_training[0]->AddTrainingConduct1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle2" value="{{$result->add_training[0]->AddTrainingTitle2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom2" value="{{$result->add_training[0]->AddTrainingFrom2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo2" value="{{$result->add_training[0]->AddTrainingTo2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours2"value="{{$result->add_training[0]->AddTrainingHours2}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType2" value="{{$result->add_training[0]->AddTrainingType2}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct2" value="{{$result->add_training[0]->AddTrainingConduct2}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle3" value="{{$result->add_training[0]->AddTrainingTitle3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom3" value="{{$result->add_training[0]->AddTrainingFrom3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo3" value="{{$result->add_training[0]->AddTrainingTo3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours3"value="{{$result->add_training[0]->AddTrainingHours3}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType3" value="{{$result->add_training[0]->AddTrainingType3}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct3" value="{{$result->add_training[0]->AddTrainingConduct3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle4" value="{{$result->add_training[0]->AddTrainingTitle4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom4" value="{{$result->add_training[0]->AddTrainingFrom4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo4" value="{{$result->add_training[0]->AddTrainingTo4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours4"value="{{$result->add_training[0]->AddTrainingHours4}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType4" value="{{$result->add_training[0]->AddTrainingType4}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct4" value="{{$result->add_training[0]->AddTrainingConduct4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle5" value="{{$result->add_training[0]->AddTrainingTitle5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom5" value="{{$result->add_training[0]->AddTrainingFrom5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo5" value="{{$result->add_training[0]->AddTrainingTo5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours5"value="{{$result->add_training[0]->AddTrainingHours5}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType5" value="{{$result->add_training[0]->AddTrainingType5}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct5" value="{{$result->add_training[0]->AddTrainingConduct5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle6" value="{{$result->add_training[0]->AddTrainingTitle6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom6" value="{{$result->add_training[0]->AddTrainingFrom6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo6" value="{{$result->add_training[0]->AddTrainingTo6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours6"value="{{$result->add_training[0]->AddTrainingHours6}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType6" value="{{$result->add_training[0]->AddTrainingType6}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct6" value="{{$result->add_training[0]->AddTrainingConduct6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle7" value="{{$result->add_training[0]->AddTrainingTitle7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom7" value="{{$result->add_training[0]->AddTrainingFrom7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo7" value="{{$result->add_training[0]->AddTrainingTo7}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours7"value="{{$result->add_training[0]->AddTrainingHours7}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType7" value="{{$result->add_training[0]->AddTrainingType7}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct7" value="{{$result->add_training[0]->AddTrainingConduct7}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle9" value="{{$result->add_training[0]->AddTrainingTitle9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom9" value="{{$result->add_training[0]->AddTrainingFrom9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo9" value="{{$result->add_training[0]->AddTrainingTo9}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours9"value="{{$result->add_training[0]->AddTrainingHours9}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType9" value="{{$result->add_training[0]->AddTrainingType9}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct9" value="{{$result->add_training[0]->AddTrainingConduct9}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5 col-sm-5 ">
                                                    <input type="text" class="form-control" name="TrainingTitle10" value="{{$result->add_training[0]->AddTrainingTitle10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingFrom10" value="{{$result->add_training[0]->AddTrainingFrom10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingTo10" value="{{$result->add_training[0]->AddTrainingTo10}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingHours10"value="{{$result->add_training[0]->AddTrainingHours10}}"disabled>
                                                </div>
                                                <div class="col-md-1 col-sm-1 ">
                                                    <input type="text" class="form-control" name="TrainingType10" value="{{$result->add_training[0]->AddTrainingType10}}"disabled>
                                                </div>
                                                <div class="col-md-2 col-sm-2 ">
                                                    <input type="text" class="form-control" name="TrainingConduct10" value="{{$result->add_training[0]->AddTrainingConduct10}}"disabled>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>

            <div class="tab-pane fade C2 pt-3" id="Add-Other">
                <!-- PDS ADD CHILDREN -->
                  <div class="">
                          <div class="clearfix">
                          </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 ">
                                      <div class="x_panel">
                                        <div class="x_title">
                                            <h6><b>VIII.  OTHER INFORMATION</b></h6>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-row">
                                                <label class="col-form-label col-md-3 col-sm-3 ">31. SPECIAL SKILLS and HOBBIES </label>
                                                <label class="col-form-label col-md-6 col-sm-6 ">32. NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</label>
                                                <label class="col-form-label col-md-3 col-sm-3 ">33. MEMBERSHIP IN ASSOCIATION/ORGANIZATION(Write in full)</label>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill" value="{{$result->add_information[0]->AddInfoSkill}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition" value="{{$result->add_information[0]->AddInfoRecognition}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization" value="{{$result->add_information[0]->AddInfoOrganization}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill1" value="{{$result->add_information[0]->AddInfoSkill1}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition1" value="{{$result->add_information[0]->AddInfoRecognition1}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization1" value="{{$result->add_information[0]->AddInfoOrganization1}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill3" value="{{$result->add_information[0]->AddInfoSkill3}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition3" value="{{$result->add_information[0]->AddInfoRecognition3}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization3" value="{{$result->add_information[0]->AddInfoOrganization3}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill4" value="{{$result->add_information[0]->AddInfoSkill4}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition4" value="{{$result->add_information[0]->AddInfoRecognition4}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization4" value="{{$result->add_information[0]->AddInfoOrganization4}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill5" value="{{$result->add_information[0]->AddInfoSkill5}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition5" value="{{$result->add_information[0]->AddInfoRecognition5}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization5" value="{{$result->add_information[0]->AddInfoOrganization5}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill6" value="{{$result->add_information[0]->AddInfoSkill6}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition6" value="{{$result->add_information[0]->AddInfoRecognition6}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization6" value="{{$result->add_information[0]->AddInfoOrganization6}}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoSkill7" value="{{$result->add_information[0]->AddInfoSkill7}}"disabled>
                                                </div>
                                                <div class="col-md-6 col-sm-6 ">
                                                    <input type="text" class="form-control" name="InfoRecognition7" value="{{$result->add_information[0]->AddInfoRecognition7}}"disabled>
                                                </div>
                                                <div class="col-md-3 col-sm-3 ">
                                                    <input type="text" class="form-control" name="InfoOrganization7" value="{{$result->add_information[0]->AddInfoOrganization7}}"disabled>
                                                </div>
                                            </div>
                                      </div>
                                  </div>
                          </div>
                  </div>
            </div>
            </form>
        </div><!-- End Bordered Tabs -->

    </div>
</div>
    </div>
    </div>
</div>
