@extends('layouts.front')@section('title', 'Product List')

@section('content')
    <link href="{{ asset('css/homepage.scss') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>

        function postProducts(id) {
            $.ajax({
                type:'POST',
                url: '/add-to-shop/' + id,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success:function() {
                    Swal.fire(
                        'Success!',
                        'Product successfully added to cart!',
                        'success'
                    )
                }
            });
        }
    </script>
    <div class="myaccount container" id="myGroup">
        <div class="collapse show " id="main-tab" data-parent="#myGroup">
            <div class="card card-my-account">
                <div class="card-body my-acc">




                    <div class="products-container">
                        <div class="filter_products d-flex ml-5 mb-5" style="align-items: center;">
                            <div style="font-size: 18px; font-weight: bold;" class="mr-2">Filters: </div>
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'low_high'])}}">Price ASC</a>
                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'high_low'])}}">Price DESC</a>
                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_asc'])}}">Name ASC</a>
                                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_desc'])}}">Name DESC</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="card mt-2">
                                        <img src="{{ asset('storage/'. $product->image) }}"  alt="">
                                        <div class="card-body">
                                            <a href="{{ route('product.show', $product->id) }}"><p class="product-title">{{ $product->name }}</p></a>
                                            <p class="poduct-price text-center">{{ "Price: ".$product->price." lei" }}</p>
                                            <div id="outer">
{{--                                                <div class="inner pb-2 text-center">--}}
{{--                                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View</a>--}}
{{--                                                </div>--}}
                                                <div id="result" class="inner text-center">
                                                    <a onclick="postProducts({{ $product->id }})" class="btn btn-success btn-add-to-cart" data-dismiss="alert">Add to cart</a>
                                                </div>
                                            </div>
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
@endsection