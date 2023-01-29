<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SMC</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <link href="{{ URL::asset('css/ready.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="">
                </a>

            </div>
            <nav class="navbar navbar-header navbar-expand-lg justify-content-end ml-5">

            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('img/profile.jpg') }}">
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
                    <li class="nav-item ">
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

                    <li class="nav-item active">
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
            <div class="content d-flex align-items-center" style="min-height: 100vh">
                <div class="container">
                    <h1>Posts</h1>
                    <div class="border-bottom"></div>
                    <div class="d-flex flex-wrap card-container">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="card col-md-4 col-sm-12" style="width: 22rem; ">
                                <img src="https://via.placeholder.com/150x100 " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                    <a href="/buyer/post/1" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="{{ asset('/img/logo2.svg') }}" alt="">
                        <img src="{{ asset('/img/login.svg') }}" alt="" width="300px" class="mt-1">
                        <h3 class="text-center mt-4">Login with us</h3>
                        <div class="d-flex justify-content-evenly" style="margin-top: 2rem">
                            <div class="btn btn-primary"> <a href="/buyer/login"
                                    style="color:white; text-decoration: none;">Seller</a> </div>
                            <div class="btn btn-primary">
                                <a href="/buyer/login" style="color:white; text-decoration: none;">Buyer</a>
                            </div>
                        </div>
                    </div>
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
{{-- <script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script> --}}
<script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

</html>
