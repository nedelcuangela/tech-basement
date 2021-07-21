@extends('layouts.app')@section('title', 'Orders Placed')

@section('content')

    <div class="col-12">
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <h1>Orders Panel</h1>
                    <div class="col-sm-2">
                        <h5>Filters:</h5>
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('shop.index', ['sort' => 'earliest_latest'])}}">Date ASC</a>
                                <a class="dropdown-item" href="{{route('shop.index', ['sort' => 'latest_earliest'])}}">Date DESC</a>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>

                <table id="table" class="table table-striped table-light">
                    <thead>
                    <tr>
                        <th scope="col">Order id</th>
                        <th scope="col">Time placed</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td class="col-4">
                                Order placed: <a href="/orders/{{$order->id}}">{{ $order->created_at }}</a>
                            </td>
                            <td class="col-4">{{$order->total}} lei</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>

@endsection