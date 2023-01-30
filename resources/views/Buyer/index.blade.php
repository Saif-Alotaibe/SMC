<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SMC</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/ready.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="">
                </a>
                <div class="navbar-toggler ">
                    <div class="sidenav-toggler">
                        <i class="la la-bars pt-2" style="font-size: 1.5rem"></i>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        {{-- <img src="{{ asset('img/profile.jpg') }}"> --}}
                        <i class="la la-user user-logo-i" style="color: gray; font-size:2rem;"></i>

                    </div>
                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                Sultan
                            </span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="{{ url('/buyer') }}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            {{-- <span class="badge badge-count">5</span> --}}
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/buyer/categories') }}">
                            <i class="la la-table"></i>
                            <p>categories</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{ url('/buyer/posts') }}">
                            <i class="la la-diamond"></i>
                            <p>Posts</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    </li>

                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-stats card-warning">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Category</p>
                                                <h4 class="card-title">{{ $numOfCategories }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Posts</p>
                                                <h4 class="card-title"> {{ $numOfPosts }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-newspaper-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Subscriptions</p>
                                                <h4 class="card-title">1303</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <div class="card card-stats card-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Order</p>
                                                <h4 class="card-title">576</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-3"> --}}
                        {{-- <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center icon-warning">
                                                <i class="la la-pie-chart text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Number</p>
                                                <h4 class="card-title">150GB</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Revenue</p>
                                                <h4 class="card-title">$ 1,345</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-times-circle-o text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Errors</p>
                                                <h4 class="card-title">23</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-heart-o text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Followers</p>
                                                <h4 class="card-title">+45K</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        <div class="row">
                            {{-- <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Goals</h4>
                                        <p class="card-category">1000 Profit</p>
                                    </div>
                                    <div class="card-body">
                                        <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12" style="width: 40%">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">World Map</h4>
                                        <p class="card-category">
                                            Map of the distribution of users around the world</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="mapcontainer">
                                            <div class="map">
                                                <span>Alternative content for the map</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row row-card-no-pd">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="fw-bold mt-1">My Balance</p>
                                        <h4><b>$ 3,018</b></h4>
                                        <a href="#" class="btn btn-primary btn-full text-left mt-3 mb-3"><i
                                                class="la la-plus"></i> Add Balance</a>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="nav">
                                            <li class="nav-item"><a class="btn btn-default btn-link"
                                                    href="#"><i class="la la-history"></i> History</a></li>
                                            <li class="nav-item ml-auto"><a class="btn btn-default btn-link"
                                                    href="#"><i class="la la-refresh"></i> Refresh</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Profit</span>
                                                <span class="text-muted fw-bold"> $3K</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                    aria-valuemax="100" data-toggle="tooltip" data-placement="top"
                                                    title="78%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Orders</span>
                                                <span class="text-muted fw-bold"> 576</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 65%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100" data-toggle="tooltip" data-placement="top"
                                                    title="65%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Tasks Complete</span>
                                                <span class="text-muted fw-bold"> 70%</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100" data-toggle="tooltip" data-placement="top"
                                                    title="70%"></div>
                                            </div>
                                        </div>
                                        <div class="progress-card">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Open Rate</span>
                                                <span class="text-muted fw-bold"> 60%</span>
                                            </div>
                                            <div class="progress mb-2" style="height: 7px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100" data-toggle="tooltip" data-placement="top"
                                                    title="60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <p class="fw-bold mt-1">Statistic</p>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="la la-pie-chart text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Number</p>
                                                    <h4 class="card-title">150GB</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-heart-o text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Followers</p>
                                                    <h4 class="card-title">+45K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js"></script>

</html>
