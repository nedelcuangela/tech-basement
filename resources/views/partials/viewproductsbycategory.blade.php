@extends('layouts.front')@section('title', 'Product List')

@section('content')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        function postProducts(id) {
            $.ajax({
                type:'POST',
                url: '/add-to-shop/' + id,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success:function() {
                    alert('Product added');
                }
            });
        }
    </script>

    <div class="col-12">
        <div class="products-container">

            @if(Auth::user()->role_id == 1)
                <div class="admin-btn col-1" style="margin-left: auto;">
                    <a class="btn btn-primary btn-lg btn-block btn-add-product" href="products/create">Add new product</a>
                </div>
            @endif
            <div class="filter_products d-flex ml-5 mb-5" style="align-items: center;">
                <div style="font-size: 18px; font-weight: bold;" class="mr-2">Filters: </div>
                <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0.375rem 1.75rem;">Sort by</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('products.index', ['sort' => 'low_high'])}}">Price ASC</a>
                        <a class="dropdown-item" href="{{route('products.index', ['sort' => 'high_low'])}}">Price DESC</a>
                        <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_asc'])}}">Name ASC</a>
                        <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_desc'])}}">Name DESC</a>
                    </div>
                </div>
            </div>

            <div class="row ml-4 mr-4">
                @foreach($products as $product)
                    <div class="col">
                        <div class="card mt-2">
                            <img src="{{ asset('storage/'. $product->image) }}"  alt="">
                            <div class="card-body">
                                <h3 class="product-title">{{ $product->name }}</h3>
                                <h5 class="poduct-price text-right"><strong>{{ "Price: ".$product->price." lei" }}</strong></h5>
                                <div id="outer">
                                    <div class="inner pb-2 text-center">
                                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View</a>
                                    </div>
                                    <div id="result" class="inner text-center">
                                        <a onclick="postProducts({{ $product->id }})" class="btn btn-success" data-dismiss="alert">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection