@extends('layouts.app')@section('title', 'Product List')

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

    <div class="products-container">
        <div class="row">

            <div class="col-sm-10">

                <h1>Product List</h1>

                {{--            @if(auth()->check() && auth()->user()->hasRole('admin'))--}}
            </div>
            <a class="btn btn-primary btn-lg btn-block btn-add-product" href="products/create">Add new product</a>
        </div>
        <hr>
        <div class="col-sm-2">
            <h5>Filters:</h5>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort by
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'low_high'])}}">Price ASC</a>
                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'high_low'])}}">Price DESC</a>
                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_asc'])}}">Name ASC</a>
                    <a class="dropdown-item" href="{{route('products.index', ['sort' => 'alphabetically_desc'])}}">Name DESC</a>
                </div>
            </div>
        </div>
        <hr>
        {{--    @endif--}}
        <div class="row col-12">
            @foreach($products as $product)
                <div class="col-sm-4">
                    <div class="card mt-2">
                        <img src="{{ asset('storage/'. $product->image) }}"  alt="">
                        <div class="card-body">
                            <p class="product-title">{{ $product->name }}</p>
                            <p class="poduct-price"><strong>{{ "Price: ".$product->price." lei" }}</strong></p>
                            <div id="outer">
                                <div class="inner pb-2"><a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View</a></div>
                                <div id="result" class="inner"><a onclick="postProducts({{ $product->id }})" class="btn btn-success" data-dismiss="alert">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection