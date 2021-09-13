@extends('layouts.front')@section('title', 'Orders Placed')

@section('content')

    <div class="row">

        <div class="col-12">

            <h1> Order History</h1>
            <hr>
        </div>


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
            @foreach($orders  as $order )
                <tr>
                    <td>{{ $order->id }}</td>
                    <td class="col-4">
                        Order placed: <a href="/orders/{{$order->id}}">{{ $order->created_at }}</a>
                    </td>
                    <td class="col-4">{{$order->total}}</td>
                    <td class="col-4">{{$order->status}}</td>
                   <td> <a class="btn btn-success" href="{{route('customer.printpdf', [$order->id])}}">Print PDF</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <hr>
    </div>
@endsection