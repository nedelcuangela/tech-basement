@extends('layouts.front')@section('title', 'Add new Product')
@section('content')

    <link href="{{ asset('css/homepage.scss') }}" rel="stylesheet">
    <div style="margin-bottom: 2em" class="title-manage">
        <h1 style="text-align: center">Manage pending orders</h1>
    </div>
    <div style="display: flex; margin: 0 auto;" class="col-8">
        <div class="col-12 d-flex justify-content-center">
            <table id="table" class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">Order id</th>
                    <th scope="col">Time placed</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td class="col-6">
                            Order placed: <a href="/orders/{{$order->id}}">{{ $order->created_at }}</a>
                        </td>
                        <td class="col-4">{{$order->total}}</td>
                        <td class="col-4">{{$order->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr>
        </div>
    </div>
@endsection