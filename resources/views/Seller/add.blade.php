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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ URL::asset('css/ready.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    Dashboard
                </a>

            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Serch ...." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav mr-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-envelope"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-bell"></i>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('img/profile2.jpg') }}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Farrah liked Admin
                                                </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);"> <strong>See all
                                            notifications</strong> <i class="la la-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img src="{{ asset('img/profile.jpg') }}"alt="user-img"
                                    width="36" class="img-circle"><span>Sultan</span></span> </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="{{ asset('img/profile.jpg') }}" alt="user">
                                        </div>
                                        <div class="u-text">
                                            <h4>Sultan</h4>
                                            <p class="text-muted">rabieali520@gmail.com</p><a href="profile.html"
                                                class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                <a class="dropdown-item" href="#"></i> My Balance</a>
                                <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> تسجيل
                                    خروج</a>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
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
                        <a href="{{ url('/') }}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            {{-- <span class="badge badge-count">5</span> --}}
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/myMaterials') }}">
                            <i class="la la-table"></i>
                            <p>My Materials</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a href="">
                            <i class="la la-diamond"></i>
                            <p>Add Materials</p>
                            {{-- <span class="badge badge-count">14</span> --}}
                        </a>
                    </li>

                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">

            <div class=" margin-top">
                <div class="cotanier">
                    <form>
                        <div class="row">

                            <div class="col-md-6 col-sm-12 p-5">
                                <form>

                                    <h3 style="border-bottom: 1px solid #0A99FF">Add Materials</h3>

                                    <select class="form-select mt-2" aria-label="Default select example">
                                        <option selected>Select a Category</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>


                                    <select class="form-select mt-4" aria-label="Default select example">
                                        <option selected>Select a Subcategory</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <div class="form-floating mt-4">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Title</label>
                                    </div>

                                    <div class="form-floating mt-4">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>

                                    <div class="form-check form-check-inline mr-3 ml-5">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            style="position: relative; left: -7px;" id="inlineRadio1"
                                            value="option1">
                                        <label class="form-check-label" for="inlineRadio1">New</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            style="position: relative; left: -7px;" id="inlineRadio2"
                                            value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Used</label>
                                    </div>

                                    <div class="input-group mb-3 mt-2">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" value="awd"
                                                style="position: relative; left: -7px;"
                                                aria-label="Checkbox for following text input">
                                            <span class="mr-3">Negotiable</span>
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox" placeholder="Price">
                                    </div>


                                </form>
                            </div>
                            <div class="col-md-6 col-sm-12 p-5">
                                <div>
                                    <label for="formFileLg" class="form-label">Uplaud Your file</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                                <div id="location">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116007.81103928633!2d46.7140608!3d24.6841344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2ssa!4v1674754841055!5m2!1sar!2ssa"
                                        width="510" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                        class="mt-3"></iframe>
                                </div>
                                <div type="button" class="btn btn-primary mt-3" onclick="getUserLocation()">
                                    Get My lcoation
                                </div>

                                <div type="submit" class="btn btn-primary mr-7 mt-3" style="display:block">
                                    Submit
                                </div>

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
<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('js/ready.min.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
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
