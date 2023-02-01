@extends("Buyer.layout")
@section("body")
<div class="main-panel">
            <div class="content d-flex align-items-center" style="min-height: 100vh">
                <div class="container">
                    <h1>Categories</h1>
                    <div class="border-bottom"></div>
                    <div class="d-flex flex-wrap card-container">
                        @foreach ($categories as $category)
                            <div class="card col-md-4 col-sm-12" style="width: 22rem; ">
                                @if ($category->name === 'Plastic')
                                    <img src="{{ asset('/img/plastic.avif') }}" style="height: 15rem;"
                                        class="card-img-top" alt="...">
                                @elseif($category->name === 'Glass')
                                    <img src="{{ asset('/img/glass.jpeg') }}" style="height: 15rem" class="card-img-top"
                                        alt="...">
                                @else
                                    <img src="https://via.placeholder.com/320x240 " class="card-img-top" alt="...">
                                @endif

                                <div class="card-body">
                                    <h1 class="card-title">{{ $category->name }}</h1>
                                    <a href={{ "/buyer/category/$category->id" }} class="btn btn-primary mt-4">Go
                                        to category</a>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
@endsection