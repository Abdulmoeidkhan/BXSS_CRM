@extends('layouts.layout')
@section("content")
<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->
    @role('administrator')
    <p>This is visible to users with the admin role. Gets translated to
        \Laratrust::hasRole('administrator')</p>
    @endrole
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                    <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                        <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                        <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                    </a>
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                    <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="mdi mdi-translate mdi-24px"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                <span class="align-middle">English</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                <span class="align-middle">French</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                <span class="align-middle">German</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                <span class="align-middle">Portuguese</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                    <a class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow" href="javascript:void(0);">
                        <i class="mdi mdi-24px"></i>
                    </a>
                </li>
                <!--/ Style Switcher -->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                    <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="mdi mdi-view-grid-plus-outline mdi-24px"></i></a>
                            </div>
                        </div>
                        <div class="dropdown-shortcuts-list scrollable-container">
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-calendar fs-4"></i>
                                    </span>
                                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                    <small class="text-muted mb-0">Appointments</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-file-document-outline fs-4"></i>
                                    </span>
                                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                    <small class="text-muted mb-0">Manage Accounts</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-account-outline fs-4"></i>
                                    </span>
                                    <a href="app-user-list.html" class="stretched-link">User App</a>
                                    <small class="text-muted mb-0">Manage Users</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-shield-check-outline fs-4"></i>
                                    </span>
                                    <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                    <small class="text-muted mb-0">Permission</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-chart-pie-outline fs-4"></i>
                                    </span>
                                    <a href="index.html" class="stretched-link">Dashboard</a>
                                    <small class="text-muted mb-0">User Profile</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-cog-outline fs-4"></i>
                                    </span>
                                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                    <small class="text-muted mb-0">Account Settings</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-help-circle-outline fs-4"></i>
                                    </span>
                                    <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                                    <small class="text-muted mb-0">FAQs & Articles</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                        <i class="mdi mdi-dock-window fs-4"></i>
                                    </span>
                                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                                    <small class="text-muted mb-0">Useful Popups</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                    <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="mdi mdi-bell-outline mdi-24px"></i>
                        <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Notification</h6>
                                <span class="badge rounded-pill bg-label-primary">8 New</span>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                                            <small class="text-truncate text-body">Won the monthly best seller gold badge</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                                            <small class="text-truncate text-body">Accepted your connection</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">12hr ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="{{asset('assets/img/avatars/2.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                                            <small class="text-truncate text-body">You have new message from Natalie</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-cart-outline"></i></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒</h6>
                                            <small class="text-truncate text-body">ACME Inc. made new order $1,154</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">1 day ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="{{asset('assets/img/avatars/9.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Application has been approved 🚀</h6>
                                            <small class="text-truncate text-body">Your ABC project application has been approved.</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class="mdi mdi-chart-pie-outline"></i></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Monthly report is generated</h6>
                                            <small class="text-truncate text-body">July monthly financial report is generated </small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="{{asset('assets/img/avatars/5.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">Send connection request</h6>
                                            <small class="text-truncate text-body">Peter sent you connection request</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">4 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <img src="{{asset('assets/img/avatars/6.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1 text-truncate">New message from Jane</h6>
                                            <small class="text-truncate text-body">Your have new message from Jane</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0">
                                            <div class="avatar me-1">
                                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="mdi mdi-alert-circle-outline"></i></span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                            <h6 class="mb-1">CPU is running high</h6>
                                            <small class="text-truncate text-body">CPU Utilization Percent is currently at 88.63%,</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-menu-footer border-top p-2">
                            <a href="javascript:void(0);" class="btn btn-primary d-flex justify-content-center">
                                View all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{asset('assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                        <small class="text-muted">{{Auth::user()->roles->toArray()[0]['display_name']}}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                                <i class="mdi mdi-account-outline me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="mdi mdi-cog-outline me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-help-center-landing.html">
                                <i class="mdi mdi-lifebuoy me-2"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="mdi mdi-help-circle-outline me-2"></i>
                                <span class="align-middle">FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="mdi mdi-currency-usd me-2"></i>
                                <span class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="mdi mdi-logout me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search..." />
            <i class="mdi mdi-close search-toggler cursor-pointer"></i>
        </div>
    </nav>

    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-4">
                <!-- Gamification Card -->
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-md-6 order-2 order-md-1">
                                <div class="card-body">
                                    <h4 class="card-title pb-xl-2">Congratulations <strong> John!</strong>🎉</h4>
                                    <p class="mb-0">You have done <span class="fw-semibold">68%</span>😎 more sales today.</p>
                                    <p>Check your new badge in your profile.</p>
                                    <a href="javascript:;" class="btn btn-primary">View Profile</a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                                <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                    <img src="{{asset('assets/img/illustrations/illustration-john-light.png')}}" height="180" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png')}}" data-app-dark-img="illustrations/illustration-john-dark.png')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Gamification Card -->

                <!-- Statistics Total Order -->
                <div class="col-lg-2 col-sm-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded">
                                        <i class="mdi mdi-cart-plus mdi-24px"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 text-success me-1">+22%</p>
                                    <i class="mdi mdi-chevron-up text-success"></i>
                                </div>
                            </div>
                            <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                                <h5 class="mb-2">155k</h5>
                                <p class="text-muted mb-lg-2 mb-xl-3">Total Orders</p>
                                <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Total Order -->

                <!-- Sessions line chart -->
                <div class="col-lg-2 col-sm-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                <h4 class="mb-0 me-2">$38.5k</h4>
                                <p class="mb-0 text-success">+62%</p>
                            </div>
                            <span class="d-block mb-2 text-muted">Sessions</span>
                        </div>
                        <div class="card-body">
                            <div id="sessions"></div>
                        </div>
                    </div>
                </div>
                <!--/ Sessions line chart -->

                <!-- Total Transactions & Report Chart -->
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-7 col-12 order-2 order-md-0">
                                <div class="card-header">
                                    <h5 class="mb-0">Total Transactions</h5>
                                </div>
                                <div class="card-body">
                                    <div id="totalTransactionChart"></div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 border-start">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-1">Report</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="totalTransaction" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalTransaction">
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">Last month transactions $234.40k</p>
                                </div>
                                <div class="card-body pt-3">
                                    <div class="row">
                                        <div class="col-6 border-end">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-success rounded">
                                                        <div class="mdi mdi-trending-up mdi-24px"></div>
                                                    </div>
                                                </div>
                                                <p class="text-muted my-2">This Week</p>
                                                <h6 class="mb-0 fw-semibold">+82.45%</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-primary rounded">
                                                        <div class="mdi mdi-trending-down mdi-24px"></div>
                                                    </div>
                                                </div>
                                                <p class="text-muted my-2">This Week</p>
                                                <h6 class="mb-0 fw-semibold">-24.86%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <p class="text-muted mb-1">Performance</p>
                                            <h6 class="mb-0 fw-semibold">+94.15%</h6>
                                        </div>
                                        <button class="btn btn-primary" type="button">view report</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Transactions & Report Chart -->

                <!-- Performance Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-1">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Performance</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="performanceDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div id="performanceChart"></div>
                        </div>
                    </div>
                </div>
                <!--/ Performance Chart -->

                <!-- Project Statistics -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Project Statistics</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="projectStatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-3 justify-content-between pb-2">
                                    <h6 class="mb-0 small">NAME</h6>
                                    <h6 class="mb-0 small">BUDGET</h6>
                                </li>
                                <li class="d-flex mb-4">
                                    <div class="avatar avatar-md flex-shrink-0 me-3">
                                        <div class="avatar-initial bg-lighter rounded">
                                            <div>
                                                <img src="{{asset('assets/img/icons/misc/3d-illustration.png')}}" alt="User" class="h-25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">3D Illustration</h6>
                                            <small class="text-muted">Blender Illustration</small>
                                        </div>
                                        <div class="badge bg-label-primary rounded-pill">$6,500</div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4">
                                    <div class="avatar avatar-md flex-shrink-0 me-3">
                                        <div class="avatar-initial bg-lighter rounded">
                                            <div>
                                                <img src="{{asset('assets/img/icons/misc/finance-app-design.png')}}" alt="User" class="h-25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Finance App Design</h6>
                                            <small class="text-muted">Figma UI Kit</small>
                                        </div>
                                        <div class="badge bg-label-primary rounded-pill">$4,290</div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4">
                                    <div class="avatar avatar-md flex-shrink-0 me-3">
                                        <div class="avatar-initial bg-lighter rounded">
                                            <div>
                                                <img src="{{asset('assets/img/icons/misc/4-square.png')}}" alt="User" class="h-25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">4 Square</h6>
                                            <small class="text-muted">Android Application</small>
                                        </div>
                                        <div class="badge bg-label-primary rounded-pill">$44,500</div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4">
                                    <div class="avatar avatar-md flex-shrink-0 me-3">
                                        <div class="avatar-initial bg-lighter rounded">
                                            <div>
                                                <img src="{{asset('assets/img/icons/misc/delta-web-app.png')}}" alt="User" class="h-25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Delta Web App</h6>
                                            <small class="text-muted">React Dashboard</small>
                                        </div>
                                        <div class="badge bg-label-primary rounded-pill">$12,690</div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar avatar-md flex-shrink-0 me-3">
                                        <div class="avatar-initial bg-lighter rounded">
                                            <div>
                                                <img src="{{asset('assets/img/icons/misc/ecommerce-website.png')}}" alt="User" class="h-25" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">eCommerce Website</h6>
                                            <small class="text-muted">Vue + Laravel</small>
                                        </div>
                                        <div class="badge bg-label-primary rounded-pill">$10,850</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Project Statistics -->

                <!-- Multiple widgets -->
                <div class="col-md-6 col-xl-4">
                    <div class="row g-4">
                        <!-- Total Revenue chart -->
                        <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                        <h4 class="mb-0 me-2">$42.5k</h4>
                                        <p class="mb-0 text-danger">-22%</p>
                                    </div>
                                    <span class="d-block mb-2 text-muted">Total Revenue</span>
                                </div>
                                <div class="card-body">
                                    <div id="totalRevenue"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Total Revenue chart -->

                        <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-label-success rounded">
                                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 text-success me-1">+38%</p>
                                            <i class="mdi mdi-chevron-up text-success"></i>
                                        </div>
                                    </div>
                                    <div class="card-info mt-4 pt-3">
                                        <h5 class="mb-2">$13.4k</h5>
                                        <p class="text-muted">Total Sales</p>
                                        <div class="badge bg-label-secondary rounded-pill mt-1">Last Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                        <div class="avatar">
                                            <div class="avatar-initial bg-label-info rounded">
                                                <i class="mdi mdi-link mdi-24px"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 text-success me-1">+62%</p>
                                            <i class="mdi mdi-chevron-up text-success"></i>
                                        </div>
                                    </div>
                                    <div class="card-info mt-4 pt-4">
                                        <h5 class="mb-2">142.8k</h5>
                                        <p class="text-muted">Total Impression</p>
                                        <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- overview Radial chart -->
                        <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                        <h4 class="mb-0 me-2">$67.1k</h4>
                                        <p class="mb-0 text-success">+49%</p>
                                    </div>
                                    <span class="d-block mb-2 text-muted">Overview</span>
                                </div>
                                <div class="card-body">
                                    <div id="overviewChart" class="d-flex align-items-center"></div>
                                </div>
                            </div>
                        </div>
                        <!--/ overview Radial chart -->
                    </div>
                </div>
                <!--/ Multiple widgets -->

                <!-- Sales Country Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Sales Country</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="salesCountryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-muted">Total $42,580 Sales</p>
                        </div>
                        <div class="card-body pb-1 px-0">
                            <div id="salesCountryChart"></div>
                        </div>
                    </div>
                </div>
                <!--/ Sales Country Chart -->

                <!-- Top Referral Source  -->
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title m-0">
                                <h5 class="mb-0">Top Referral Sources</h5>
                                <small class="text-muted">82% Activity Growth</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                                <li class="nav-item">
                                    <div class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id" aria-controls="navs-orders-id" aria-selected="true">
                                        <button type="button" class="btn btn-icon rounded-pill btn-label-google-plus">
                                            <i class="mdi mdi-google mdi-20px"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id" aria-controls="navs-sales-id" aria-selected="false">
                                        <button type="button" class="btn btn-icon rounded-pill btn-label-facebook">
                                            <i class="mdi mdi-facebook mdi-20px"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id" aria-controls="navs-profit-id" aria-selected="false">
                                        <button type="button" class="btn btn-icon rounded-pill btn-label-instagram">
                                            <i class="mdi mdi-instagram mdi-20px"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id" aria-controls="navs-income-id" aria-selected="false">
                                        <button type="button" class="btn btn-icon rounded-pill btn-label-twitter">
                                            <i class="mdi mdi-twitter mdi-20px"></i>
                                        </button>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="nav-link btn d-flex align-items-center justify-content-center disabled" role="tab" data-bs-toggle="tab" aria-selected="false">
                                        <button type="button" class="btn btn-icon rounded bg-label-secondary">
                                            <i class="mdi mdi-plus mdi-20px"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <div class="tab-content p-0 ms-0 ms-sm-2">
                                <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                    <th class="pe-0 fw-medium text-heading">Status</th>
                                                    <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                    <th class="pe-0 text-end text-heading">total revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Email Marketing Campaign</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="pe-0 text-success">+24%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$42,857</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Google Workspace</td>
                                                    <td class="pe-0">
                                                        <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                    </td>
                                                    <td class="text-danger pe-0">-12%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$850</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Affiliation Program</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="text-success pe-0">+24%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$5,576</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Google Adsense</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                                    <td class="text-success pe-0">0%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="fw-medium ps-0 text-heading">parameter</th>
                                                    <th class="pe-0 fw-medium text-heading">Status</th>
                                                    <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                    <th class="pe-0 text-end text-heading">total revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Create Audiences in Ads Manager</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="pe-0 text-danger">-8%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$322</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Facebook page advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="text-success pe-0">+19%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$5,634</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Messenger advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                                    <td class="text-danger pe-0">-23%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$751</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Video campaign</td>
                                                    <td class="pe-0">
                                                        <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                    </td>
                                                    <td class="text-success pe-0">+21%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$3,585</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="fw-medium ps-0 text-heading">parameter</th>
                                                    <th class="pe-0 fw-medium text-heading">Status</th>
                                                    <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                    <th class="pe-0 text-end text-heading">total revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Create shopping advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                                    <td class="pe-0 text-danger">-15%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$599</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">IGTV advertising</td>
                                                    <td class="pe-0">
                                                        <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                    </td>
                                                    <td class="text-success pe-0">+37%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$1,467</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Collection advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                                    <td class="text-danger pe-0">0%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$0</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Stories advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="text-success pe-0">+29%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$4,546</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                    <th class="pe-0 fw-medium text-heading">Status</th>
                                                    <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                    <th class="pe-0 text-end text-heading">total revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Interests advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                                    <td class="pe-0 text-success">+2%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$404</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Community advertising</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="text-success pe-0">+25%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$399</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Device advertising</td>
                                                    <td class="pe-0">
                                                        <span class="badge rounded-pill bg-label-warning">Completed</span>
                                                    </td>
                                                    <td class="text-success pe-0">+21%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$177</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-heading fw-semibold ps-0">Campaigning</td>
                                                    <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                                    <td class="text-danger pe-0">-5%</td>
                                                    <td class="pe-0 text-end fw-semibold h6">$1,139</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Top Referral Source  -->

                <!-- Weekly Sales Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Weekly Sales</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="weeklySalesDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted mb-0">Total 85.4k Sales</p>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded">
                                            <i class="mdi mdi-trending-up mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3 d-flex flex-column">
                                        <small class="text-muted mb-1">Net Income</small>
                                        <h6 class="mb-0 fw-semibold">$438.5K</h6>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-warning rounded">
                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3 d-flex flex-column">
                                        <small class="text-muted mb-1">Expense</small>
                                        <h6 class="mb-0 fw-semibold">$22.4K</h6>
                                    </div>
                                </div>
                            </div>
                            <div id="weeklySalesChart"></div>
                        </div>
                    </div>
                </div>
                <!--/ Weekly Sales Chart-->

                <!-- visits By Day Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-header pb-1">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Visits by Day</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="visitsByDayDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsByDayDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0 text-muted">Total 248.5k Visits</p>
                        </div>
                        <div class="card-body">
                            <div id="visitsByDayChart"></div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <h6 class="mb-1 fw-semibold">Most Visited Day</h6>
                                    <p class="mb-0 text-muted">Total 62.4k Visits on Thursday</p>
                                </div>
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-warning rounded">
                                        <i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ visits By Day Chart-->

                <!-- Activity Timeline -->
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-1">Activity Timeline</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="timelineDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineDropdown">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 pb-1">
                            <ul class="timeline card-timeline mb-0">
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-2 fw-semibold">Create youtube video for next product 😎</h6>
                                            <small class="text-muted">Tomorrow</small>
                                        </div>
                                        <p class="text-muted mb-2">Product introduction and details video</p>
                                        <div class="d-flex">
                                            <a href="https://www.youtube.com/@pixinvent1515" target="_blank" class="text-truncate">
                                                <span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                                                    <i class="mdi mdi-play text-white"></i>
                                                </span>
                                                <span class="fw-semibold text-muted">https://www.youtube.com/@pixinvent1515</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-info"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-2 fw-semibold">Received payment from usa client 😍</h6>
                                            <small class="text-muted">January, 18</small>
                                        </div>
                                        <p class="text-muted mb-2">Received payment $1,490 for banking ios app</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent border-0">
                                    <span class="timeline-point timeline-point-warning"></span>
                                    <div class="timeline-event pb-1">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-2 fw-semibold">Meeting with joseph morgan for next project</h6>
                                            <small class="text-muted">April, 23</small>
                                        </div>
                                        <p class="text-muted mb-2">Meeting Video call on zoom at 9pm</p>
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" class="me-3">
                                                <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="20" class="me-2" />
                                                <span class="fw-semibold text-muted">presentation.pdf</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Activity Timeline -->
            </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with <span class="text-danger">❤️</span> by
                        <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium">Pixinvent</a>
                    </div>
                    <div>
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                        <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
@endsection
