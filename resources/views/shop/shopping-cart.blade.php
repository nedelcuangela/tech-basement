@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(empty($cart) || $cart->products != null)
        <div class="myaccount container" id="myGroup">
            <div class="collapse show " id="main-tab" data-parent="#myGroup">
                <div class="card card-my-account">
                    <div class="card-body my-acc">
                        <div class="checkout-form">
                            <form action="{{ route('shop.placeOrder') }}" method="POST">
                                <h3>Products:</h3>
                                @csrf
                                <ul class="list-group">
                                    @foreach ($cart->products as $product)
                                        <li class="list-group-item">
                                            <span class="badge">{{ $product['qty'] }}</span>
                                            <strong>{{ $product['product']['name'] }}</strong>
                                            <span class="label label-success">Price: {{ $product['price'] }} lei</span>
                                            <input type="hidden" name="{{ $product['product']['id'] }}"
                                                   value="{{ $product['qty'] }}">
                                            <div class="btn-group float-right">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                       href="{{ route('shop.reduceByOne', ['id'=> $product['product']['id']]) }}">Reduce
                                                        by 1</a>
                                                    <a class="dropdown-item"
                                                       href="{{ route('shop.removeItem', ['id'=> $product['product']['id']]) }}">Reduce
                                                        all</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <strong>Total: {{ number_format($cart->totalPrice, 0, '.', ',')  }} lei</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            Checkout
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        @else
                            <div class="card">
                                <div class="card-header">{{ __(' Shopping Cart') }}</div>
                                @if(session('success'))
                                    <div class="alert alert-primary">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card-body">
                                    <h4>Cart empty.</h4>
                                    <a href="/products" type="button" class="btn btn-primary">Let's shop</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection