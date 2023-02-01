@extends("Seller.layout")
@section("body")
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
@endsection