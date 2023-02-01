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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ URL::asset('css/ready.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
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
                    <li class="nav-item ">
                        <a href="{{ url('/seller/myPosts') }}">
                            <i class="la la-table"></i>
                            <p>My posts</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    <li class="nav-item active">
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
            <div class=" margin-top">
                <div class="cotanier">
                    <form method="post" action="{{ route('post.add') }}">
                        @csrf
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="col-md-6 col-sm-12 p-5">

                                <h3 style="border-bottom: 1px solid #0A99FF">Add Post</h3>

                                <select class="form-select mt-2" aria-label="Default select example" name="category"
                                    required>
                                    <option selected>Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value={{ $category->id }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                <div class="form-floating mt-4">
                                    <input type="text" class="form-control" id="title"
                                        placeholder="name@example.com" name="title">
                                    <label for="title">Title</label>
                                </div>

                                <div class="form-floating mt-4">
                                    <textarea class="form-control" id="description" style="height: 100px" name="description"></textarea>
                                    <label for="description">Description</label>
                                </div>

                                <div class="form-check form-check-inline mr-3 ml-5">
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio1" value="New">
                                    <label class="form-check-label" for="inlineRadio1">New</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_new"
                                        style="position: relative; left: -7px;" id="inlineRadio2" value="Used">
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
                                        placeholder="Price" name="price" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 p-5">
                                <div>
                                    <label for="formFileLg" class="form-label">Material Photo</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <!-- <div id="location">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116007.81103928633!2d46.7140608!3d24.6841344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2ssa!4v1674754841055!5m2!1sar!2ssa"
                                        width="510" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                        class="mt-3"></iframe>
                                </div> -->
                                <!-- <div type="button" class="btn btn-primary mt-3" onclick="getUserLocation()">
                                    Get My lcoation
                                </div> -->
                                <select class="form-select mt-2" aria-label="Default select example" name="city"
                                    required>
                                    <option selected>Select a City</option>
                                    @foreach ($cities as $city)
                                        <option value={{ $city->id }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>

                                <div class="form-floating mt-4">
                                    <input type="text" class="form-control" id="location_details"
                                        name="location_details" required>
                                    <label for="location_details">Location details</label>
                                </div>

                                <button type="submit" class="btn btn-primary mr-7 mt-3" style="display:block">
                                    Submit
                                </button>

                            </div>
                        </div>
                    </form>
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

</body>
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

<script>
    const getUserLocation = () => {
        this.userLocation = navigator.geolocation.getCurrentPosition(showUserLocation);

        function showUserLocation(position) {
            document.getElementById('location').innerHTML = `
                <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2131.5777656215155!2d
                ${position.coords.longitude}
                !3d${position.coords.latitude}
                !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssa!4v1674552188477!5m2!1sen!2ssa" width="510" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            `
        }
    }
</script>

</html>
