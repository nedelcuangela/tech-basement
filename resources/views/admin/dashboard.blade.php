@extends('layouts.app')@section('title', 'Add new Product')
@section('content')

    <div style="margin: 0 auto" class="col-8 card-deck">
        <div class="card">
            <div class="card-body">
                <a href="/products/create">
                    <h5 class="card-title">Add Products</h5>
                </a>
                <p class="card-text">Here you add new products to the shop.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="/manage-orders">
                <h5 class="card-title">Manage Pending Orders</h5>
                </a>
                <p class="card-text">Here you can accept or deny pending orders.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="/users">
                <h5 class="card-title">User List</h5>
                </a>
                <p class="card-text">Here you can manage the user list of your store.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="/roles">
                <h5 class="card-title">Site roles</h5>
                </a>
                <p class="card-text">Here you can manage the site roles.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="/permissions">
                <h5 class="card-title">Site Permisssions</h5>
                </a>
                <p class="card-text">Here you can manage the site permissions.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="/orders">
                <h5 class="card-title">Manage Orders</h5>
                </a>
                <p class="card-text">Here are stored the orders.</p>
            </div>
        </div>
    </div>



@endsection