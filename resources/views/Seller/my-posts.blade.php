<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SMC</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link href="{{ URL::asset('css/ready.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
    <link rel="icon" type="image/png" href="{{asset('/img/smc-logo.png')}}"/>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a class="logo">
                    <img src="{{ asset('/img/logo.svg') }}" alt="">
                </a>
                <div class="navbar-toggler ">
                    <div class="sidenav-toggler">
                        <i class="la la-bars pt-2" style="font-size: 1.5rem"></i>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">

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
                                <p class="text-center ml-2 mt-2">{{ Auth::guard('sellers')->user()->name }}</p>
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
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">My posts</h4>
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-3" style="text-align: center">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ $post->title }}</h4>
                                        <p class="card-category"></p>
                                    </div>
                                    <div class="card-body">
                                            <img src="{{$post->photos->first()->url}}" style="width: 50%;height: 50%;"
                                                class="card-img-top" alt="...">
                                        <p class="mt-2">{{ $post->description }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <i class="la la-eyedropper add-order" style="font-size: 1.7rem"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id }}">
                                        </i>
                                        {{-- <i class="la la-eye-slash add-order" style="font-size:1.7rem"></i> --}}
                                        <form method="POST" action="{{ route('post.delete') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $post->id }}">
                                            <button type="submit" class="btn" style="padding:0;">
                                                <i class="la la-trash add-order" style="font-size:1.7rem"></i>
                                            </button>
                                        </form>
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
    @foreach ($posts as $post)
        <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title fs-5" id="exampleModalLabel">{{ $post->title }}</h5>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('post.put') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $post->id }}">

                            <select class="form-select mt-2 " aria-label="Default select example" name="category"
                                required>
                                @foreach ($categories as $category)
                                    @if ($category->id === $post->category_id)
                                        <option value={{ $category->id }} selected>{{ $category->name }}</option>
                                    @else
                                        <option value={{ $category->id }}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="form-floating mt-4">
                                <input type="text" class="form-control" id="title"
                                    placeholder="name@example.com" name="title" value="{{ $post->title }}">
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mt-4">
                                <input type="text" class="form-control" id="title"
                                    placeholder="name@example.com" name="description"
                                    value="{{ $post->description }}">
                                <label for="title">Description</label>
                            </div>
                            <div class="form-check form-check-inline mr-3 ml-5">
                                @if ($post->is_new === 1)
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio1" value="New"
                                        checked>
                                @else
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio1" value="New">
                                @endif
                                <label class="form-check-label" for="inlineRadio1">New</label>
                            </div>
                            <div class="form-check form-check-inline">
                                @if ($post->is_new === 0)
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio2" value="Used"
                                        checked>
                                @else
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio2" value="Used">
                                @endif

                                <label class="form-check-label" for="inlineRadio2">Used</label>
                            </div>

                            <div class="input-group mb-3 mt-2">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" name="is_negotiable"
                                        style="position: relative; left: -7px;"
                                        aria-label="Checkbox for following text input">
                                    <span class="mr-3">Negotiable</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Text input with checkbox"
                                    placeholder="Price" name="price" value="{{ $post->price }}" required>
                            </div>

                            <div class="form-floating mt-4">
                                <input type="text" class="form-control" id="location_details"
                                    name="location_details" required value="{{ $post->location_details }}">
                                <label for="location_details">Location details</label>
                            </div>
                            <select class="form-select mt-2" aria-label="Default select example" name="city"
                                required>
                                @foreach ($cities as $city)
                                    @if ($city->id === $post->city_id)
                                        <option value={{ $city->id }} selected>{{ $city->name }}</option>
                                    @else
                                        <option value={{ $city->id }}>{{ $city->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Canlse</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
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
