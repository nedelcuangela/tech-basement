@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @if(empty($cart) || $cart->products != null)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Shipping information') }}</div>

                        @if(session('success'))
                            <div class="alert alert-primary">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <form method="POST" action="{{ route('shop.checkout') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Adress:') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus></textarea>

                                        @error('adress')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number:') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('Zip code:') }}</label>

                                    <div class="col-md-6">
                                        <input id="zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="zipcode">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Order') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
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

    @endif
@endsection