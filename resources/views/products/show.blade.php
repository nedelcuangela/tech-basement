@extends('layouts.app')@section('title', $product->name)

@section('content')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">

    <script>
        const activeImage = document.querySelector(".product-image .active");
        const productImages = document.querySelectorAll(".image-list img");
        const navItem = document.querySelector('a.toggle-nav');

        function changeImage(e) {
            activeImage.src = e.target.src;
        }

        function toggleNavigation(){
            this.nextElementSibling.classList.toggle('active');
        }

        productImages.forEach(image => image.addEventListener("click", changeImage));
        navItem.addEventListener('click', toggleNavigation);
    </script>

    <div class="myaccount container" id="myGroup">
        <div class="collapse show " id="main-tab" data-parent="#myGroup">
            <div class="card card-my-account">
                <div class="card-body my-acc">

                    <div class="grid product">
                        <div class="column-xs-12 column-md-7">
                            <div class="product-gallery">
                                <div class="product-image">
                                    <img class="active" src="https://source.unsplash.com/W1yjvf5idqA">
                                </div>
                                <ul class="image-list">
                                    <li class="image-item"><img src="https://source.unsplash.com/W1yjvf5idqA"></li>
                                    <li class="image-item"><img src="https://source.unsplash.com/VgbUxvW3gS4"></li>
                                    <li class="image-item"><img src="https://source.unsplash.com/5WbYFH0kf_8"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column-xs-12 column-md-5">
                            <h1>Bonsai</h1>
                            <h2>$19.99</h2>
                            <div class="description">
                                <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
                                <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
                            </div>
                            <button class="add-to-cart">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <h1> {{ $product->name }}</h1>--}}

{{--                                <form action="/products/{{ $product->id }}" method="POST">--}}

{{--                                    --}}{{--                    @if(auth()->check() && auth()->user()->hasRole('admin'))--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                    <a class="btn btn-primary" href="/products/{{ $product->id }}/edit">Edit</a>--}}
{{--                                    --}}{{--                    @endif--}}
{{--                                </form>--}}
{{--                                <hr>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-8">--}}
{{--                                        <p><strong>Name:</strong> {{ $product->name }}</p>--}}
{{--                                        <p><strong>Brand:</strong> {{ $product->brand }}</p>--}}
{{--                                        <p><strong>Specifications:</strong> {{ $product->specifications }}</p>--}}
{{--                                        <p><strong>Description:</strong> {{ $product->description }}</p>--}}
{{--                                        <p><strong>Category:</strong> {{ $product->category }}</p>--}}
{{--                                        <p><strong>Price:</strong> {{ $product->price }}</p>--}}
{{--                                        <p><strong>Stock:</strong> {{ $product->stock }}</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-4">--}}
{{--                                        <p>--}}
{{--                                            <strong>Media:</strong>--}}
{{--                                            <img src="/storage/{{ $product->image }}" class="card-img-top" alt="...">--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection