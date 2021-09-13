@extends('layouts.front')

@section('title')
    Orders
@endsection

@section('content')


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Details for order id: {{ $order->id }}</div>

                        @method('DELETE')
                        @csrf

                        <table id="table" class="table table-striped table-light">
                            <thead>
                            <tr>
                                <th scope="col">Product quantity</th>
                                <th scope="col">Product name</th>
                                <th scope="col">Product brand</th>
                                <th scope="col">Product specs</th>
                                <th scope="col">Product category</th>
                                <th scope="col">Product price</th>
                                <th scope="col">Product description</th>
                                <th scope="col">Product photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        @php $items = json_decode($order->items, true) @endphp
                                        {{ $items[$product->id] }}
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td>{{ $product->specifications }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td><img src="/storage/{{ $product->image }}" class="card-img-top" alt="..."></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            <form action="{{ route('shop.order', ['order'=>$order])}}" method="POST">

                                <select multiple class="form-control" id="orders" name="status">
                                    <option @if($order->status == 'accepted') selected @endif value="accepted">Accept Order</option>
                                    <option @if($order->status == 'declined') selected @endif value="declined">Decline Order</option>
                                </select>

                                <button type="submit" class="btn btn-success">Save choice</button>
{{--                                <a href="/" class="btn btn-success" type="submit">Accept order</a>--}}
{{--                                <a href="/" class="btn btn-danger" type="submit">Decline order</a>--}}
                                @csrf
                            </form>
                    </div>
                </div>
            </div>
        </div>


@endsection