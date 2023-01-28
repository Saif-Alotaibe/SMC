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
        <div class="main-header d-flex justify-content-between align-items-center p-1">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="">
                </a>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg justify-content-end ml-5">
                @if (Auth::guard('sellers')->check())
                    <p  class="text-center ml-2 mt-2">Hello, {{ Auth::guard('sellers')->user()->name }}</p>
                    <a href={{ route('seller.dashboard') }} class="btn btn-success ml-2">Dashboard</a>
                    <a href={{ route('common.logout') }} class="btn btn-primary">Logout</a>
                @elseif(Auth::guard('buyers')->check())
                    <p class="text-center ml-2 mt-2">Hello, {{ Auth::guard('buyers')->user()->name }}</p>
                    <a href={{ route('buyer.dashboard') }} class="btn btn-success ml-2">Dashboard</a>
                    <a href={{ route('common.logout') }} class="btn btn-primary">Logout</a>
                @else
                    <a href={{ route('common.login') }} class="btn btn-primary ml-2">Login</a>
                    <a href={{ route('common.register') }} class="btn btn-success">Register</a>
                @endif
                <!-- <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Join Us</button> -->
            </nav>
        </div>
        <div class="">
            <div class="content liner-bakcground ">
                <div class="container "
                    style="height:85vh; padding-top:3rem; display:flex; justify-content: space-around; align-items: center;">
                    <div>
                        <img src="/img/hero.svg" alt="">
                    </div>
                    <div class="row text-center justify-content-center">
                        <div class="col-6">
                            {{-- <h2>SMC</h2> --}}
                            <img src="/img/logo2.svg" alt="">
                        </div>
                        <div class="col-7">
                            <h4> Make your garbage your <span style="color: #0A99FF"> advantage. </span></h4>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Search</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-1">
                    <div class="col-12 text-center">
                        <img src="{{ asset('/img/section.svg') }}" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 8rem">
                    <div class="col-6">
                        <h1 class="text-center">
                            Negotiable <span style="color: #0A99FF">Price</span>!
                        </h1>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/img/price.svg') }}" alt="">
                    </div>
                </div>
                {{-- catgories --}}
                <div class="row">
                    <h2 class="border-bottomg">Catgories</h2>
                    <div class=" d-flex flex-wrap card-container">
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- rescent posts --}}
                <div class="row mt-3">
                    <h2 class="border-bottomg">Recent Posts</h2>
                    <div class=" d-flex flex-wrap card-container">
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card col-md-4 col-sm-12" style="width: 22rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
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
