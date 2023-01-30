<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Coffe</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


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

            </div>
            <nav class="navbar navbar-header navbar-expand-lg">

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
                        <a href="{{ url('/seller') }}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            {{-- <span class="badge badge-count">5</span> --}}
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/seller/myPosts') }}">
                            <i class="la la-table"></i>
                            <p>My posts</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{ url('/seller/addPost') }}">
                            <i class="la la-diamond"></i>
                            <p>Add Post</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">My posts</h4>
                    <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-3" style="text-align: center">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{$post->title}}</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
                                    <img width="100px" style="justify-content: center"
                                        src="{{ asset('/img/coffee1.jpeg') }}" alt="">
                                        <p class="">{{$post->Description}}</p>
                                </div>
                                <div class="card-footer">
                                    <i class="la la-eyedropper add-order" style="font-size: 1.7rem"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    </i>
                                    <i class="la la-eye-slash add-order" style="font-size:1.7rem"></i>
                                    <i class="la la-trash add-order" style="font-size:1.7rem"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>


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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">أكسيلسو - كولومبيا</h5>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>الفترات المتاحة</option>
                            <option value="1">٢ اسبوع</option>
                            <option value="2">٤ اسابيع</option>
                            <option value="3">٢ شهور</option>
                        </select>
                        <label for="floatingSelect">اختر مدة العقد</label>

                        <select class="form-select" style="margin-top: 1rem" id="floatingSelect٢"
                            aria-label="Floating label select example">
                            <option selected>الكميات المتاحة</option>
                            <option value="1">٢٠ كيلو</option>
                            <option value="2">٣٠ كيلو</option>
                            <option value="3">٤٠ كيلو</option>
                        </select>
                        <label for="floatingSelect٢">اختر الكميه</label>
                    </div>
                    <h5 style="margin-top: 1rem">0000SR</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="button" class="btn btn-success">شراء</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>


</html>
