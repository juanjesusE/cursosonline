<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    <!-- Title -->
    <title> Panel Administrativo </title>

    <!--- Favicon --->
    <link rel="icon" href="/adminazira/img/brand/favicon.png" type="image/x-icon"/>
    <!--- Icons css --->
    <link href="/adminazira/css/icons.css" rel="stylesheet">
    <!-- Owl-carousel css-->
    <link href="/adminazira/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <!--- Right-sidemenu css --->
    <link href="/adminazira/plugins/sidebar/sidebar.css" rel="stylesheet">
    <!--- Style css --->
    <link href="/adminazira/css/style.css" rel="stylesheet">
    <link href="/adminazira/css/skin-modes.css" rel="stylesheet">
    <!--- Sidemenu css --->
    <link href="/adminazira/css/sidemenu.css" rel="stylesheet">
    <!--- Animations css --->
    <link href="/adminazira/css/animate.css" rel="stylesheet">
</head>

<body class="main-body app sidebar-mini">

<!-- Loader -->
<div id="global-loader">
    <img src="/adminazira/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->



<!-- page -->
<div class="page">

    <!-- main-sidebar opened -->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <aside class="main-sidebar app-sidebar sidebar-scroll">
        <div class="main-sidebar-header">
            <a class="desktop-logo logo-light active" href="index.html" class="text-center mx-auto"><img src="/adminazira/img/brand/logo.png" class="main-logo"></a>
            <a class="desktop-logo icon-logo active"href="index.html"><img src="/adminazira/img/brand/favicon.png" class="logo-icon"></a>
            <a class="desktop-logo logo-dark active" href="index.html"><img src="/adminazira/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="/adminazira/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
        </div><!-- /logo -->
        <div class="main-sidebar-loggedin">
            <div class="app-sidebar__user">
                <div class="dropdown user-pro-body text-center">
                    <div class="user-pic">
                        <img src="/adminazira/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
                    </div>
                    <div class="user-info">
                        <h6 class=" mb-0 text-dark">Petey Cruiser</h6>
                        <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                    </div>
                </div>
            </div>
        </div><!-- /user -->
        <div class="sidebar-navs">
            <ul class="nav  nav-pills-circle">
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings" aria-describedby="tooltip365540">
                    <a class="nav-link text-center m-2">
                        <i class="fe fe-settings"></i>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat">
                    <a class="nav-link text-center m-2">
                        <i class="fe fe-mail"></i>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers">
                    <a class="nav-link text-center m-2">
                        <i class="fe fe-user"></i>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                    <a class="nav-link text-center m-2">
                        <i class="fe fe-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /menu -->
        <div class="main-sidebar-body">
            <ul class="side-menu ">
                <li class="slide">
                    <a class="side-menu__item" href="index.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Widgets</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-mail menu-icons"></i><span class="side-menu__label">Mail</span><span class="badge badge-warning side-badge">5</span></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="mail.html">Mail</a></li>
                        <li><a class="slide-item" href="mail-compose.html">Mail Compose</a></li>
                        <li><a class="slide-item" href="mail-read.html">Read-mail</a></li>
                        <li><a class="slide-item" href="mail-settings.html">mail-settings</a></li>
                        <li><a class="slide-item" href="chat.html">Chat</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="cards.html">Cards</a></li>
                        <li><a class="slide-item" href="darggablecards.html">Darggablecards</a></li>
                        <li><a class="slide-item" href="rangeslider.html">Range-slider</a></li>
                        <li><a class="slide-item" href="calendar.html">Calendar</a></li>
                        <li><a class="slide-item" href="contacts.html">Contacts</a></li>
                        <li><a class="slide-item" href="image-compare.html">Image-compare</a></li>
                        <li><a class="slide-item" href="notification.html">Notification</a></li>
                        <li><a class="slide-item" href="widget-notification.html">Widget-notification</a></li>
                        <li><a class="slide-item" href="treeview.html">Treeview</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="icons.html"><i class="side-menu__icon fe fe-award"></i><span class="side-menu__label">Icons</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-map-pin menu-icon"></i><span class="side-menu__label">Maps</span><span class="badge badge-pink side-badge">2</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li><a class="slide-item" href="map-leaflet.html">Mapel Maps</a></li>
                        <li><a class="slide-item" href="map-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </aside>
    <!-- /main-sidebar -->

    <!-- main-content -->
    <div class="main-content">

        <!-- main-header -->
        <div class="main-header  side-header">
            <div class="container-fluid">
                <div class="main-header-left ">
                    <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                        <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                        <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                    </div>
                    <div class="responsive-logo">
                        <a href="index.html"><img src="/adminazira/img/brand/logo-white.png" class="logo-1"></a>
                        <a href="index.html"><img src="/adminazira/img/brand/logo.png" class="logo-11"></a>
                        <a href="index.html"><img src="/adminazira/img/brand/favicon-white.png" class="logo-2"></a>
                        <a href="index.html"><img src="/adminazira/img/brand/favicon.png" class="logo-12"></a>
                    </div>
                </div>
                <div class="main-header-right">
                    <div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="fe fe-search"></i>
										</button>
									</span>
                            </div>
                        </form>
                    </div>
                    <div class="nav nav-item  navbar-nav-right ml-auto">
                        <div class="nav-item full-screen fullscreen-button">
                        </div>
                        <div class="dropdown  nav-item main-header-message ">
                            <a class="new nav-link" href="#" ><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content bg-primary-gradient text-left d-flex">
                                    <div class="">
                                        <h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
                                    </div>
                                    <div class="my-auto ml-auto">
                                        <a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="dropdown nav-item main-header-notification">
                            <a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
                            <div class="dropdown-menu">
                                <div class="menu-header-content bg-primary-gradient text-left d-flex">
                                    <div class="">
                                        <h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
                                    </div>
                                    <div class="my-auto ml-auto">
                                        <a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="dropdown main-profile-menu nav nav-item nav-link">

                            <a class="profile-user d-flex" href=""><img src="/adminazira/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

                            <div class="dropdown-menu">
                                <div class="main-header-profile header-img">
                                    <div class="main-img-user"><img alt="" src="/adminazira/img/faces/6.jpg"></div>
                                    <h6>Petey Cruiser</h6><span>Premium Member</span>
                                </div>
                                <a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                                <a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
                                <a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
                                <a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account Settings</a>
                                <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                            </div>
                        </div>
                        <div class="dropdown main-header-message right-toggle">
                            <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div>
                    <h4 class="content-title mb-2">Hi, welcome back!</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- /breadcrumb -->


            <!-- main-content-body -->



            <div class="main-content-body">

                <section class="content">
                    @yield('content')
                </section>

                <div class="row row-sm">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card overflow-hidden project-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <svg enable-background="new 0 0 469.682 469.682" version="1.1"  class="mr-4 ht-60 wd-60 my-auto primary" viewBox="0 0 469.68 469.68" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
												<path d="m120.41 298.32h87.771c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449h-87.771c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449z"/>
                                            <path d="m291.77 319.22h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"/>
                                            <path d="m291.77 361.01h-171.36c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h171.36c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"/>
                                            <path d="m420.29 387.14v-344.82c0-22.987-16.196-42.318-39.183-42.318h-224.65c-22.988 0-44.408 19.331-44.408 42.318v20.376h-18.286c-22.988 0-44.408 17.763-44.408 40.751v345.34c0.68 6.37 4.644 11.919 10.449 14.629 6.009 2.654 13.026 1.416 17.763-3.135l31.869-28.735 38.139 33.959c2.845 2.639 6.569 4.128 10.449 4.18 3.861-0.144 7.554-1.621 10.449-4.18l37.616-33.959 37.616 33.959c5.95 5.322 14.948 5.322 20.898 0l38.139-33.959 31.347 28.735c3.795 4.671 10.374 5.987 15.673 3.135 5.191-2.98 8.232-8.656 7.837-14.629v-74.188l6.269-4.702 31.869 28.735c2.947 2.811 6.901 4.318 10.971 4.18 1.806 0.163 3.62-0.2 5.224-1.045 5.493-2.735 8.793-8.511 8.361-14.629zm-83.591 50.155-24.555-24.033c-5.533-5.656-14.56-5.887-20.376-0.522l-38.139 33.959-37.094-33.959c-6.108-4.89-14.79-4.89-20.898 0l-37.616 33.959-38.139-33.959c-6.589-5.4-16.134-5.178-22.465 0.522l-27.167 24.033v-333.84c0-11.494 12.016-19.853 23.51-19.853h224.65c11.494 0 18.286 8.359 18.286 19.853v333.84zm62.693-61.649-26.122-24.033c-4.18-4.18-5.224-5.224-15.673-3.657v-244.51c1.157-21.321-15.19-39.542-36.51-40.699-0.89-0.048-1.782-0.066-2.673-0.052h-185.47v-20.376c0-11.494 12.016-21.42 23.51-21.42h224.65c11.494 0 18.286 9.927 18.286 21.42v333.32z"/>
                                            <path d="m232.21 104.49h-57.47c-11.542 0-20.898 9.356-20.898 20.898v104.49c0 11.542 9.356 20.898 20.898 20.898h57.469c11.542 0 20.898-9.356 20.898-20.898v-104.49c1e-3 -11.542-9.356-20.898-20.897-20.898zm0 123.3h-57.47v-13.584h57.469v13.584zm0-34.482h-57.47v-67.918h57.469v67.918z"/>
											</svg>
                                    </div>
                                    <div class="project-content">
                                        <h6>Invoices</h6>
                                        <ul>
                                            <li>
                                                <strong>Processing</strong>
                                                <span>5</span>
                                            </li>

                                            <li>
                                                <strong>Paid</strong>
                                                <span>56</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card  overflow-hidden project-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <svg enable-background="new 0 0 438.891 438.891" class="mr-4 ht-60 wd-60 my-auto danger" version="1.1" viewBox="0 0 438.89 438.89" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
												<path d="m347.97 57.503h-39.706v-17.763c0-5.747-6.269-8.359-12.016-8.359h-30.824c-7.314-20.898-25.6-31.347-46.498-31.347-20.668-0.777-39.467 11.896-46.498 31.347h-30.302c-5.747 0-11.494 2.612-11.494 8.359v17.763h-39.707c-23.53 0.251-42.78 18.813-43.886 42.318v299.36c0 22.988 20.898 39.706 43.886 39.706h257.04c22.988 0 43.886-16.718 43.886-39.706v-299.36c-1.106-23.506-20.356-42.068-43.886-42.319zm-196.44-5.224h28.735c5.016-0.612 9.045-4.428 9.927-9.404 3.094-13.474 14.915-23.146 28.735-23.51 13.692 0.415 25.335 10.117 28.212 23.51 0.937 5.148 5.232 9.013 10.449 9.404h29.78v41.796h-135.84v-41.796zm219.43 346.91c0 11.494-11.494 18.808-22.988 18.808h-257.04c-11.494 0-22.988-7.314-22.988-18.808v-299.36c1.066-11.964 10.978-21.201 22.988-21.42h39.706v26.645c0.552 5.854 5.622 10.233 11.494 9.927h154.12c5.98 0.327 11.209-3.992 12.016-9.927v-26.646h39.706c12.009 0.22 21.922 9.456 22.988 21.42v299.36z"/>
                                            <path d="m179.22 233.57c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z"/>
                                            <path d="m329.16 256.03h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"/>
                                            <path d="m179.22 149.98c-3.919-4.131-10.425-4.364-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.364-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.211-0.391-0.412-0.601-0.604z"/>
                                            <path d="m329.16 172.44h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"/>
                                            <path d="m179.22 317.16c-3.919-4.131-10.425-4.363-14.629-0.522l-33.437 31.869-14.106-14.629c-3.919-4.131-10.425-4.363-14.629-0.522-4.047 4.24-4.047 10.911 0 15.151l21.42 21.943c1.854 2.076 4.532 3.224 7.314 3.135 2.756-0.039 5.385-1.166 7.314-3.135l40.751-38.661c4.04-3.706 4.31-9.986 0.603-14.025-0.19-0.21-0.391-0.411-0.601-0.604z"/>
                                            <path d="m329.16 339.63h-120.16c-5.771 0-10.449 4.678-10.449 10.449s4.678 10.449 10.449 10.449h120.16c5.771 0 10.449-4.678 10.449-10.449s-4.678-10.449-10.449-10.449z"/>
											</svg>
                                    </div>
                                    <div class="project-content">
                                        <h6>Tasks</h6>
                                        <ul>
                                            <li>
                                                <strong>Processing</strong>
                                                <span>42</span>
                                            </li>

                                            <li>
                                                <strong>Completed</strong>
                                                <span>23</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card overflow-hidden project-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <svg enable-background="new 0 0 477.849 477.849" class="mr-4 ht-60 wd-60 my-auto success" version="1.1" viewBox="0 0 477.85 477.85" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
												<path d="m374.1 385.52c71.682-74.715 69.224-193.39-5.492-265.08-34.974-33.554-81.584-52.26-130.05-52.193-103.54-0.144-187.59 83.676-187.74 187.22-0.067 48.467 18.639 95.077 52.193 130.05l-48.777 65.024c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l47.275-63.044c65.4 47.651 154.08 47.651 219.48 0l47.275 63.044c5.655 7.541 16.353 9.069 23.893 3.413 7.541-5.655 9.069-16.353 3.413-23.893l-48.775-65.024zm-135.54 24.064c-84.792-0.094-153.51-68.808-153.6-153.6 0-84.831 68.769-153.6 153.6-153.6s153.6 68.769 153.6 153.6-68.769 153.6-153.6 153.6z"/>
                                            <path d="m145.29 24.984c-33.742-32.902-87.767-32.221-120.67 1.521-32.314 33.139-32.318 85.997-8e-3 119.14 6.665 6.663 17.468 6.663 24.132 0l96.546-96.529c6.663-6.665 6.663-17.468 0-24.133zm-106.55 82.398c-12.186-25.516-1.38-56.08 24.136-68.267 13.955-6.665 30.175-6.665 44.131 0l-68.267 68.267z"/>
                                            <path d="m452.49 24.984c-33.323-33.313-87.339-33.313-120.66 0-6.663 6.665-6.663 17.468 0 24.132l96.529 96.529c6.665 6.663 17.468 6.663 24.132 0 33.313-33.322 33.313-87.338 0-120.66zm-14.08 82.449-68.301-68.301c19.632-9.021 42.79-5.041 58.283 10.018 15.356 15.341 19.371 38.696 10.018 58.283z"/>
                                            <path d="m238.56 136.52c-9.426 0-17.067 7.641-17.067 17.067v96.717l-47.787 63.71c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l51.2-68.267c2.216-2.954 3.413-6.547 3.413-10.24v-102.4c1e-3 -9.426-7.64-17.067-17.065-17.067z"/>
											</svg>
                                    </div>
                                    <div class="project-content">
                                        <h6>Estimates</h6>
                                        <ul>
                                            <li>
                                                <strong>Processing</strong>
                                                <span>2</span>
                                            </li>

                                            <li>
                                                <strong>Accepted</strong>
                                                <span>16</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card overflow-hidden project-card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <svg enable-background="new 0 0 512 512" class="mr-4 ht-60 wd-60 my-auto warning" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
												<path d="m259.2 317.72h-6.398c-8.174 0-14.824-6.65-14.824-14.824 1e-3 -8.172 6.65-14.822 14.824-14.822h6.398c8.174 0 14.825 6.65 14.825 14.824h29.776c0-20.548-13.972-37.885-32.911-43.035v-33.74h-29.777v33.739c-18.94 5.15-32.911 22.487-32.911 43.036 0 24.593 20.007 44.601 44.601 44.601h6.398c8.174 0 14.825 6.65 14.825 14.824s-6.65 14.824-14.825 14.824h-6.398c-8.174 0-14.824-6.65-14.824-14.824h-29.777c0 20.548 13.972 37.885 32.911 43.036v33.739h29.777v-33.74c18.94-5.15 32.911-22.487 32.911-43.035 0-24.594-20.008-44.603-44.601-44.603z"/>
                                            <path d="m502.7 432.52c-7.232-60.067-26.092-111.6-57.66-157.56-27.316-39.764-65.182-76.476-115.59-112.06v-46.29l37.89-98.425-21.667-0.017c-6.068-4e-3 -8.259-1.601-13.059-5.101-6.255-4.559-14.821-10.802-30.576-10.814h-0.046c-15.726 0-24.292 6.222-30.546 10.767-4.799 3.487-6.994 5.081-13.041 5.081h-0.027c-6.07-5e-3 -8.261-1.602-13.063-5.101-6.255-4.559-14.821-10.801-30.577-10.814h-0.047c-15.725 0-24.293 6.222-30.548 10.766-4.8 3.487-6.995 5.081-13.044 5.081h-0.027l-21.484-0.017 36.932 98.721v46.117c-51.158 36.047-89.636 72.709-117.47 111.92-33.021 46.517-52.561 98.116-59.74 157.74l-9.304 77.285h512l-9.304-77.284zm-301.06-395.47c4.8-3.487 6.995-5.081 13.045-5.081h0.026c6.07 4e-3 8.261 1.602 13.062 5.101 6.255 4.559 14.821 10.802 30.578 10.814h0.047c15.725 0 24.292-6.222 30.546-10.767 4.799-3.487 6.993-5.081 13.041-5.081h0.026c6.068 5e-3 8.259 1.602 13.059 5.101 2.869 2.09 6.223 4.536 10.535 6.572l-21.349 55.455h-92.526l-20.762-55.5c4.376-2.041 7.773-4.508 10.672-6.614zm98.029 91.89v26.799h-83.375v-26.799h83.375zm-266.09 351.08 5.292-43.947c6.571-54.574 24.383-101.7 54.458-144.07 26.645-37.537 62.54-71.458 112.73-106.5h103.78c101.84 71.198 150.75 146.35 163.29 250.56l5.291 43.948h-444.85z"/>
											</svg>
                                    </div>
                                    <div class="project-content">
                                        <h6>Revenue</h6>
                                        <ul>
                                            <li>
                                                <strong>Earnings</strong>
                                                <span>$15,425</span>
                                            </li>
                                            <li>
                                                <strong>Expensive</strong>
                                                <span>$8,147</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /main-content -->

    <!--Sidebar-right-->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0">
            <div class="panel-body tabs-menu-body p-0 border-0">
                <ul class="Date-time">
                    <li class="time">
                        <h1 class="animated ">21:00</h1>
                        <p class="animated ">Sat,October 1st 2029</p>
                    </li>
                </ul>
                <div class="card-body border-top border-bottom">
                    <div class="row">
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
                            <div>Inbox</div>
                        </div>
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
                            <div>Settings</div>
                        </div>
                        <div class="col-4 text-center">
                            <a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
                            <div>Sign out</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Sidebar-right-->

    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>Copyright © 2020 <a href="#">Azira</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
        </div>
    </div>
    <!-- Footer closed -->
</div>
<!-- page closed -->

<!--- Back-to-top --->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<!--- JQuery min js --->
<script src="/adminazira/plugins/jquery/jquery.min.js"></script>
<!--- Datepicker js --->
<script src="/adminazira/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
<!--- Bootstrap Bundle js --->
<script src="/adminazira/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--- Ionicons js --->
<script src="/adminazira/plugins/ionicons/ionicons.js"></script>
<!--- Chart bundle min js --->
<script src="/adminazira/plugins/chart.js/Chart.bundle.min.js"></script>
<!--- JQuery sparkline js --->
<script src="/adminazira/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--- Internal Sampledata js --->
<script src="/adminazira/js/chart.flot.sampledata.js"></script>
<!--- Rating js --->
<script src="/adminazira/plugins/rating/jquery.rating-stars.js"></script>
<script src="/adminazira/plugins/rating/jquery.barrating.js"></script>
<!--- Eva-icons js --->
<script src="/adminazira/js/eva-icons.min.js"></script>
<!--- Moment js --->
<script src="/adminazira/plugins/moment/moment.js"></script>
<!--- Perfect-scrollbar js --->
<script src="/adminazira/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/adminazira/plugins/perfect-scrollbar/p-scroll.js"></script>
<!--- Sidebar js --->
<script src="/adminazira/plugins/side-menu/sidemenu.js"></script>
<!-- right-sidebar js -->
<script src="/adminazira/plugins/sidebar/sidebar.js"></script>
<script src="/adminazira/plugins/sidebar/sidebar-custom.js"></script>
<!-- Morris js -->
<script src="/adminazira/plugins/raphael/raphael.min.js"></script>
<script src="/adminazira/plugins/morris.js/morris.min.js"></script>
<!--- Scripts js --->
<script src="/adminazira/js/script.js"></script>
<!--- Index js --->
<script src="/adminazira/js/index.js"></script>
<!--- Custom js --->
<script src="/adminazira/js/custom.js"></script>

</body>
</html>
