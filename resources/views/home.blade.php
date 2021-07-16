@extends('layouts.app')

@section('content')
    <section id="head">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img class="head-img" src="https://indianrenters.com/wp-content/uploads/Apple-Products-on-Rent.png" alt="" /></div>
                <div class="col-md-6 head-text">
                    <h6>BEST QUALITY PRODUCTS</h6>
                    <h1>Lorem ipsum dolor sit amet!</h1>
                    <p>Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet eros, eu mattis lacus lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum massa, sit amet tristique sem. </p>
                    <button type="button" class="btn btn-secondary">Buy now</button>
                </div>
            </div>
        </div>
    </section>

    <section id="shiping">
        <div class="container">
            <div class="row">
                @foreach($products->unique('category') as $product)
                <div class="col-md-3">
                    <div class="shipping-box">
                        <div class="box-title">
                            <h3>{{ $product->category }}</h3>
                            <p>Vivamus feugiat, odio in aliquam venenatis, augue ante laoreet eros, eu mattis lacus lectus vitae velit. Curabitur tempus at risus sit amet iaculis. Vestibulum et dictum massa, sit amet tristique sem. </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="Best-selling">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h1>Best Selling Products</h1>
                    </div>
                </div>
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
        </div>
    </section>
@endsection
