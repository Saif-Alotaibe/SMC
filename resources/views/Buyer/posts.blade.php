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
    <link rel="icon" type="image/png" href="{{asset('/img/smc-logo.png')}}"/>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="" class="logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="">
                </a>
                <div class="navbar-toggler ">
                    <div class="sidenav-toggler">
                        <i class="la la-bars pt-2" style="font-size: 1.5rem"></i>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg justify-content-end ml-5">

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
                                <p class="text-center ml-2 mt-2">{{ Auth::guard('buyers')->user()->name }}</p>
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
                <div class="row justify-content-center mt-5">
                    <div class="col-4">
                        <form method="get" action="{{ route('common.logout') }}">
                            <button type="submit" class="btn btn-primary">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="content d-flex align-items-center" style="min-height: 100vh">
                <div class="container">
                    <h1>Posts</h1>
                    <div class="border-bottom"></div>
                    <div class="d-flex flex-wrap card-container">
                        @foreach ($posts as $post)
                            <div class="card col-md-4 col-sm-12" style="width: 22rem; ">
                                    <img src="{{$post->photos->first()->url}}" style="height: 15rem"
                                        class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <h6 class="mt-2">Price {{ $post->price }}</h6>
                                    <p class="border-bottom mt-2">Description</p>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href={{ "/buyer/post/$post->id" }} class="btn btn-primary">See more</a>
                                </div>
                            </div>
                        @endforeach
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
