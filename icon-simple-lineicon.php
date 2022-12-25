<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>soengsouy.com</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Soeng Souy</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.php"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Ticket List
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.php"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Forms </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="form-inputs.php" class="sidebar-link"><span
                                            class="hide-menu"> Form Inputs
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-input-grid.php" class="sidebar-link"><span
                                            class="hide-menu"> Form Grids
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-checkbox-radio.php" class="sidebar-link"><span
                                            class="hide-menu"> Checkboxes &
                                            Radios
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Tables </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="table-basic.php" class="sidebar-link"><span
                                            class="hide-menu"> Basic Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-dark-basic.php" class="sidebar-link"><span
                                            class="hide-menu"> Dark Basic Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-sizing.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Sizing Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-layout-coloured.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Coloured
                                            Table Layout
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-datatable-basic.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Basic
                                            Datatables
                                            Layout
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">Charts </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="chart-morris.php" class="sidebar-link"><span
                                            class="hide-menu"> Morris Chart
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="chart-chart-js.php" class="sidebar-link"><span
                                            class="hide-menu"> ChartJs
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="chart-knob.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Knob Chart
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                    class="hide-menu">UI Elements </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="ui-buttons.php" class="sidebar-link"><span
                                            class="hide-menu"> Buttons
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-modals.php" class="sidebar-link"><span
                                            class="hide-menu"> Modals </span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-tab.php" class="sidebar-link"><span
                                            class="hide-menu"> Tabs </span></a></li>
                                <li class="sidebar-item"><a href="ui-tooltip-popover.php" class="sidebar-link"><span
                                            class="hide-menu"> Tooltip &
                                            Popover</span></a></li>
                                <li class="sidebar-item"><a href="ui-notification.php" class="sidebar-link"><span
                                            class="hide-menu">Notification</span></a></li>
                                <li class="sidebar-item"><a href="ui-progressbar.php" class="sidebar-link"><span
                                            class="hide-menu">Progressbar</span></a></li>
                                <li class="sidebar-item"><a href="ui-typography.php" class="sidebar-link"><span
                                            class="hide-menu">Typography</span></a></li>
                                <li class="sidebar-item"><a href="ui-bootstrap.php" class="sidebar-link"><span
                                            class="hide-menu">Bootstrap
                                            UI</span></a></li>
                                <li class="sidebar-item"><a href="ui-breadcrumb.php" class="sidebar-link"><span
                                            class="hide-menu">Breadcrumb</span></a></li>
                                <li class="sidebar-item"><a href="ui-list-media.php" class="sidebar-link"><span
                                            class="hide-menu">List
                                            Media</span></a></li>
                                <li class="sidebar-item"><a href="ui-grid.php" class="sidebar-link"><span
                                            class="hide-menu"> Grid </span></a></li>
                                <li class="sidebar-item"><a href="ui-carousel.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Carousel</span></a></li>
                                <li class="sidebar-item"><a href="ui-scrollspy.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Scrollspy</span></a></li>
                                <li class="sidebar-item"><a href="ui-toasts.php" class="sidebar-link"><span
                                            class="hide-menu"> Toasts</span></a>
                                </li>
                                <li class="sidebar-item"><a href="ui-spinner.php" class="sidebar-link"><span
                                            class="hide-menu"> Spinner </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.php"
                                aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                                    class="hide-menu">Cards
                                </span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.php"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Login
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="authentication-register1.php" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Register
                                </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                                    class="hide-menu">Icons
                                </span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="icon-fontawesome.php" class="sidebar-link"><span
                                            class="hide-menu"> Fontawesome Icons </span></a></li>

                                <li class="sidebar-item"><a href="icon-simple-lineicon.php" class="sidebar-link"><span
                                            class="hide-menu"> Simple Line Icons </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Multi
                                    level
                                    dd</span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item 1.1</span></a>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item 1.2</span></a>
                                </li>
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><span class="hide-menu">Menu 1.3</span></a>
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> item
                                                    1.3.1</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> item
                                                    1.3.2</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> item
                                                    1.3.3</span></a></li>
                                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                    class="hide-menu"> item
                                                    1.3.4</span></a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.4</span></a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="docs/docs.php"
                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                    class="hide-menu">Documentation</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Simple Line Icon</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Control Icons</h4>
                                <h6 class="card-subtitle">use class <code>icon-</code> icon name in i tag</h6>
                                <div class="icon-list-demo row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-user"></i> icon-user
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-people"></i> icon-people
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-user-female"></i> icon-user-female
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-user-follow"></i> icon-user-follow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-user-following"></i> icon-user-following
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-user-unfollow"></i> icon-user-unfollow
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-login"></i> icon-login
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-logout"></i> icon-logout
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-emotsmile"></i> icon-emotsmile
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-phone"></i> icon-phone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-call-end"></i> icon-call-end
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-call-in"></i> icon-call-in
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-call-out"></i> icon-call-out
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-map"></i> icon-map
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-location-pin"></i> icon-location-pin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-direction"></i> icon-direction
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-directions"></i> icon-directions
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-compass"></i> icon-compass
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-layers"></i> icon-layers
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-menu"></i> icon-menu
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-list"></i> icon-list
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-options-vertical"></i> icon-options-vertical
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-options"></i> icon-options
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-down"></i> icon-arrow-down
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-left"></i> icon-arrow-left
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-right"></i> icon-arrow-right
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-up"></i> icon-arrow-up
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-up-circle"></i> icon-arrow-up-circle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-left-circle"></i> icon-arrow-left-circle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-right-circle"></i> icon-arrow-right-circle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-arrow-down-circle"></i> icon-arrow-down-circle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-check"></i> icon-check
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-clock"></i> icon-clock
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-plus"></i> icon-plus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-close"></i> icon-close
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-trophy"></i> icon-trophy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-screen-smartphone"></i> icon-screen-smartphone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-screen-desktop"></i> icon-screen-desktop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-plane"></i> icon-plane
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-notebook"></i> icon-notebook
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-mustache"></i> icon-mustache
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-mouse"></i> icon-mouse
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-magnet"></i> icon-magnet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-energy"></i> icon-energy
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-disc"></i> icon-disc
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-cursor"></i> icon-cursor
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-cursor-move"></i> icon-cursor-move
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-crop"></i> icon-crop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-chemistry"></i> icon-chemistry
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-speedometer"></i> icon-speedometer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-shield"></i> icon-shield
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-screen-tablet"></i> icon-screen-tablet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-magic-wand"></i> icon-magic-wand
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-hourglass"></i> icon-hourglass
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-graduation"></i> icon-graduation
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-ghost"></i> icon-ghost
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-game-controller"></i> icon-game-controller
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-fire"></i> icon-fire
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-eyeglass"></i> icon-eyeglass
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-envelope-open"></i> icon-envelope-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-envolope-letter"></i> icon-envolope-letter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-bell"></i> icon-bell
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-badge"></i> icon-badge
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-anchor"></i> icon-anchor
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-wallet"></i> icon-wallet
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-vector"></i> icon-vector
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-speech"></i> icon-speech
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-puzzle"></i> icon-puzzle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-printer"></i> icon-printer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-present"></i> icon-present
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-playlist"></i> icon-playlist
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-pin"></i> icon-pin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-picture"></i> icon-picture
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-handbag"></i> icon-handbag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-globe-alt"></i> icon-globe-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-globe"></i> icon-globe
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-folder-alt"></i> icon-folder-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-folder"></i> icon-folder
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-film"></i> icon-film
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-feed"></i> icon-feed
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-drop"></i> icon-drop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-drawar"></i> icon-drawar
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-docs"></i> icon-docs
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-doc"></i> icon-doc
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-diamond"></i> icon-diamond
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-cup"></i> icon-cup
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-calculator"></i> icon-calculator
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-bubbles"></i> icon-bubbles
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-briefcase"></i> icon-briefcase
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-book-open"></i> icon-book-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-basket-loaded"></i> icon-basket-loaded
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-basket"></i> icon-basket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-bag"></i> icon-bag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-action-undo"></i> icon-action-undo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-action-redo"></i> icon-action-redo
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-wrench"></i> icon-wrench
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-umbrella"></i> icon-umbrella
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-trash"></i> icon-trash
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-tag"></i> icon-tag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-support"></i> .icon-support
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-frame"></i> icon-frame
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-size-fullscreen"></i> icon-size-fullscreen
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-size-actual"></i> icon-size-actual
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-shuffle"></i> icon-shuffle
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-share-alt"></i> icon-share-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-share"></i> icon-share
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-rocket"></i> icon-rocket
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-question"></i> icon-question
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-pie-chart"></i> icon-pie-chart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-pencil"></i> icon-pencil
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-note"></i> icon-note
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-loop"></i> icon-loop
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-home"></i> icon-home
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-grid"></i> icon-grid
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-graph"></i> icon-graph
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-microphone"></i> icon-microphone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-music-tone-alt"></i> icon-music-tone-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-music-tone"></i> icon-music-tone
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-earphones-alt"></i> icon-earphones-alt
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-earphones"></i> icon-earphones
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-equalizer"></i> icon-equalizer
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-like"></i> icon-like
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-dislike"></i> icon-dislike
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-start"></i> icon-control-start
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-rewind"></i> icon-control-rewind
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-play"></i> icon-control-play
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-pause"></i> icon-control-pause
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-forward"></i> icon-control-forward
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-control-end"></i> icon-control-end
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-volume-1"></i> icon-volume-1
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-volume-2"></i> icon-volume-2
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-volume-off"></i> icon-volume-off
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-calender"></i> icon-calender
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-bulb"></i> icon-bulb
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-chart"></i> icon-chart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-ban"></i> icon-ban
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-bubble"></i> icon-bubble
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-camrecorder"></i> icon-camrecorder
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-camera"></i> icon-camera
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-cloud-download"></i> icon-cloud-download
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-cloud-upload"></i> icon-cloud-upload
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-eye"></i> icon-eye
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-flag"></i> icon-flag
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-heart"></i> icon-heart
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-info"></i> icon-info
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-key"></i> icon-key
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-link"></i> icon-link
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-lock"></i> icon-lock
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-lock-open"></i> icon-lock-open
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-magnifier"></i> icon-magnifier
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-magnifier-add"></i> icon-magnifier-add
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-magnifier-remove"></i> icon-magnifier-remove
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-paper-clip"></i> icon-paper-clip
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-paper-plane"></i> icon-paper-plane
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-power"></i> icon-power
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-refresh"></i> icon-refresh
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-reload"></i> icon-reload
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-settings"></i> icon-settings
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-star"></i> icon-star
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-symble-female"></i> icon-symble-female
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-symbol-male"></i> icon-symbol-male
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-target"></i> icon-target
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-credit-card"></i> icon-credit-card
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-paypal"></i> icon-paypal
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-tumblr"></i> icon-social-tumblr
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-twitter"></i> icon-social-twitter
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-facebook"></i> icon-social-facebook
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-instagram"></i> icon-social-instagram
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-linkedin"></i> icon-social-linkedin
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-pintarest"></i> icon-social-pintarest
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-github"></i> icon-social-github
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-gplus"></i> icon-social-gplus
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-reddit"></i> icon-social-reddit
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-skype"></i> icon-social-skype
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-dribbble"></i> icon-social-dribbble
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-behance"></i> icon-social-behance
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-foursqare"></i> icon-social-foursqare
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-soundcloud"></i> icon-social-soundcloud
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-spotify"></i> icon-social-spotify
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-stumbleupon"></i> icon-social-stumbleupon
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-youtube"></i> icon-social-youtube
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 sl-icon">
                                        <i class="icon-social-dropbox"></i> icon-social-dropbox
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>