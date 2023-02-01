@extends("Buyer.layout")
@section("body")
<div class="main-panel">
            <div class="content d-flex align-items-center" style="min-height: 100vh">
                <div class="container">
                    <h1>Glass</h1>
                    <div class="border-bottom"></div>
                    <div class="d-flex flex-wrap card-container">
                        @foreach ($categoryPosts as $post)
                            <div class="card col-md-4 col-sm-12" style="width: 22rem; ">
                                    <img src="{{$post->photos->first()->url}}" style="height: 50%; width: 50%; margin:auto;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <h6 class="mt-2">Price {{ $post->price }}</h6>
                                    <p class="border-bottom mt-2">Description</p>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href={{ "/buyer/post/$post->id" }} class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection