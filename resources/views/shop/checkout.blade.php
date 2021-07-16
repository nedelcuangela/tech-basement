@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="alert alert-success" role="alert">
        Your order has been submitted successfully!
    </div>

    <a class="btn btn-secondary" id="button" href="/products">Continue Shopping</a>

@endsection