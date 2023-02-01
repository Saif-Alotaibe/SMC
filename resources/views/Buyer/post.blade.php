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

            </div>
            <nav class="navbar navbar-header navbar-expand-lg justify-content-end ml-5">

            </nav>
        </div>
        <div class="content d-flex align-items-center" style="min-height: 100vh">
            <div class="container">
                <h2><a href="/buyer/posts"> <i class="la la-angle-left"></i> </a></h2>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-5">
                        <img src="{{$post->photos->first()->url}}" style="height: 50%; width: 50%;" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3>{{ $post->title }}</h3>
                        <div class="border-bottom mt-3"></div>
                        <h5 class="mt-4"> <i class="la la-map-pin" style="color: #0A99FF"></i> {{ $city }}
                        </h5>
                        <h5 class="mt-4"><i class="la la-money" style="color: #0A99FF"></i> {{ $post->price }} SR
                            @if ($post->is_negotiable === 1)
                                <span class="mr-4" style="color: #0A99FF"> Negotiable
                                    price</span>
                            @endif
                        </h5>
                        <h5 class="mt-4">
                            <i style="color: #0A99FF" class="la la-calendar"></i>
                            {{ $post->created_at }}
                        </h5>
                        <h5 class="mt-4 p-2 use col-2 text-center"
                            style="border: #0A99FF 1px solid ; border-radius:.5rem">
                            @if ($post->is_new === 1)
                                New
                            @else
                                Used
                            @endif
                        </h5>
                        <h6 class="border-bottom mt-4">Description</h6>
                        <p class="mt-4">{{ $post->description }}</p>

                        <div class="row">
                            <div class="col-6">
                                <div class="btn btn-primary"> Contact </div>
                            </div>
                            <div class="col-6"></div>
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
