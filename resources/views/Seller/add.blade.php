@extends("Seller.layout")

@section("body")
<div class="main-panel">
            <div class=" margin-top">
                <div class="cotanier">
                    <form method="post" action="{{ route('post.add') }}" enctype="multipart/form-data">
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
                                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="image" required>
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
@endsection